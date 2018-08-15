<?php
/*session_start();
if(!isset($_SESSION["flag"]) && !($_SESSION["position"]=="HEADQUARTER")){
	header("location:http://localhost/HOSPITAL/done/login.php");
	exit();
} 
*/
?>
<html>
<head>
<meta charset="utf-8"/>
<title>HEADQUARTER DATA ENTRY</title>
<link rel="stylesheet" href="doc.css"/>
</head>
<body>
<?php   
$Aadharerror=$doctoriderror=$imgerror="";$run=0;

mysqli_report(MYSQLI_REPORT_ALL);
//error_reporting(0);
$admin="localhost";
$user="root";
$pass=12345;
$dbName= "healthcare";

function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
try{
	//aadhar input
	if(empty($_POST["aadhar"])){
		$Aadharerror="Invalid Aadhar Number";$run=1;
	}
	else{
		$Aadhar=test_input($_POST["aadhar"]);
		if(!is_numeric($Aadhar)){
			$Aadharerror="Invalid Aadhar Number"; $run=1;
			 }
		
	}
	
	//doctor
	$doctorid=$_SESSION["id"];
	
	//
	$remark="";
	$remark=test_input($_POST["remark"]);
	 //image
	$image="";
			$file_type=$_FILES['image']['type']; 
	$allowed=array("image/jpeg","image/jpg","image/png");
$pic=$_FILES['image']['tmp_name'];

if($pic!=null){
if(!in_array($file_type,$allowed)) {
  $imgerror="Only jpg, gif, and jpeg files are allowed.";$run=1; 
  }
  else{ 
 $img=file_get_contents($pic);
} 
}
 //ends
else{
	$imgerror="Upload pic";$run=1;
}

if($run==0){

$con=mysqli_connect($admin,$user,$pass,$dbName,3306);
if(!$con){
	echo "<script>alert('Connection not set.');</script>";
}
$sql="insert into headquarter_data_store(aadhar_id,doctor_id,remark,patient_data)"."values(?,?,?,?)";
   if($stmt=mysqli_prepare($con,$sql)){
 mysqli_stmt_bind_param($stmt,"iiss",$Aadhar,$doctorid,$remark,$img);
  if(!mysqli_execute($stmt)){
die(mysqli_stmt_error($stmt));
  }
  	$check=0;
  $check = mysqli_stmt_affected_rows($stmt);
   if($check){
 echo "<script>alert('DATA ENTERED');</script>";
 }
 else{
 	echo '<script type="text/javascript">alert("SORRY...SERVER IS DOWN");</script>';
 }  
}
   }else{
   	echo '<script type="text/javascript">alert("SORRY...SERVER IS DOWN");</script>';
   	
   }
}

catch(Exception $e){
	try{
	$error=$e->getMessage(); $page="headquarter_data";
	$sqlerror="insert into debug(error,page) values(?,?)";
	$stmterror = mysqli_prepare($con,$sqlerror);
mysqli_stmt_bind_param($stmterror,"ss",$error,$page);
mysqli_stmt_execute($stmterror);

	$run=0;
}
	catch(Exception $ex){
			}
}
}/*
else{
	if(isset($_POST["signout"])){
            echo '<script type="text/javascript">alert("LOGGED OUT SUCCESSFULLY")</script>';
   		session_unset();
   		session_destroy();
   		header("location:http://localhost/HOSPITAL/done/login.php");
   		exit();
   }*/

?>
<div class="bc1"></div>
<header>
<h1>HEADQUARTER DATA ENTRY</h1>
</header> 
<br style="clear:both">
<form action="" method="post" enctype="multipart/form-data">
	<div id="b1">
		<b>Aadhar No.</b>
			<input type="text" name="aadhar" size="12" placeholder="" maxlength="12"><span>*</span><br>
			<?php echo "$Aadharerror"; ?>
	</div>

	<div id="b4">
		<b>Remark</b>
			<input type="text" name="remark" size="50" placeholder="50 char most" maxlength="50"><span>*</span>
	</div>
		<div>
			<label for="file"><b>Choose a file:</b></label>
			<input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><span>*</span><br>
			<?php echo "$imgerror"; ?>
			<button type="submit" value="SUBMIT" name="ok">Submit</button></div>
		
		</form>
	
	<p><b><em>* fields are mandatroy</em></b></p>
</body>
</html>

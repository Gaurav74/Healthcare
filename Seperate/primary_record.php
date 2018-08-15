
<html>
<head>
<meta charset="utf-8"/>
<title>PRIMARY CENTERS</title>
<link rel="stylesheet" href="pri.css"/>
</head>
<body>

<div class="bc1"></div>
<header>
<h1>PRIMARY CENTERS</h1>
</header>
<form action="" method="post" enctype="multipart/form-data">
	<div id="b1">
		<b>Aadhar No.</b>
			<input type="text"  size="12" name="aadhar" placeholder="" maxlength="12"><span>*</span>
			
	<div id="b8">
		<b>Primary Centers ID.</b>	
			<input type="text"  size="10" name="primaryid" placeholder=""><span>*</span>
	<br> 
	</div>
	<div id="b2">
		<b>Disease Name</b>
			<input type="text"  size="10" name="disease" placeholder=""><span>*</span>
	<br>  
	</div>
	<div id="b3">
		<b>Remark</b>
			<input type="text"  size="10" name="remark" placeholder=""><span>*</span>
	<br> 
	</div>
		<div id="b5">
		<b>Refer</b>
	<div class="gen">
		<b>Yes</b>
			<input type="radio" name="ref" value="yes">
		<b>No</b>
			<input type="radio" name="ref" value="no"><span>*</span>
			<br>
			</div>  </div>
	<div id="b6">
		<b>Refer to</b>	
			<select name="refer">
			<option value="null" selected="">SELECT CARE-CENTER</option>
				<option value="distcare">DISTRICT CARE-CENTER</option>
				<option value="headcare">HEAD CARE-CENTER</option>
			</select><span>*</span>
	<br> S
	</div>
	
	<br>
	<div id="ok">
	<input type="submit" value="Submit" name="ok" style="font-size: 20px;margin-left:40%;">
	<input type="submit" name="signout" value="LOG OUT">
		 </div>
		 </form>
		 
		 <footer>
		 	<br>
<p><b><em>* fields are mandatroy</em></b></p>
		 </footer>
</body>
</html>
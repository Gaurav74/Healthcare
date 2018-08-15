 
<html>
<head>
<meta charset="utf-8"/>
<title>DISTRICT DATA ENTRY</title>
<link rel="stylesheet" href="doc.css"/>
</head>
<body>
 
<div class="bc1"></div>
<header>
<h1>DISTRICT DATA ENTRY</h1>
</header> 
<br style="clear:both">
<form action="" method="post" enctype="multipart/form-data">
	<div id="b1">
		<b>Aadhar No.</b>
			<input type="text" name="aadhar" size="12" placeholder="" maxlength="12"><span>*</span><br>
			 
	</div>

	<div id="b4">
		<b>Remark</b>
			<input type="text" name="remark" size="50" placeholder="50 char most" maxlength="50"><span>*</span>
	</div>
		<div>
			<label for="file"><b>Choose a file:</b></label>
			<input type="file" name="image" accept="image/jpeg,image/jpg,image/png"><br><span>*</span><br>
			 
			<input type="submit" value="SUBMIT" name="ok"></div>
			<input type="submit" name="signout" value="SIGNOUT">
		</form>
	
	<p><b><em>* fields are mandatroy</em></b></p>
</body>
</html>

<html>
<head>
<meta charset="utf-8"/>
<title>Headquarter Surgery </title>
<link rel="stylesheet" href="district_surgery.css"/>
</head>
<body>
<div class="bc1"></div>
<header>
<h1>HEADQUARTER SURGERY</h1>
</header>
<form action="" method="post" enctype="multipart/form-data">
	<div id="b1">
		<b>Aadhar No.</b>
			<input type="text" name="aadhar" size="12" placeholder="" maxlength="12"><span>*</span><br>
			 
	</div>
	<div id="b2">
		<b>Operation Remark</b>
			<input type="text" name="remark" size="10" placeholder="50 character most" maxlength="50"><span>*</span>
	</div>
	<div id="b5">
		<b>Patient Verified</b>
	<div id="gen">
		<b>Yes</b>
			<input type="radio" name="verifybool" value="yes">
		<b>No</b>
			<input type="radio" name="verifybool" value="no"><span>*</span>
			</div><br>
			 
	</div>
	<div id="b8">
		<b>Operation ID</b>	
			<div>
				<select name="operatefor">
				<option value="select" selected="">SELECT SURGERY</option>
					<option value="heart">CARDIAC</option>
					<option value="endocrine">ENDOCRINE SURGERY</option>
					<option value="hand">HAND SURGERY</option>
					<option value="neuro">NEUROSURGERY</option>
				</select><span>*</span><br>
				 
			</div>
			
	</div>
	
	<div id="b5">
		<b>Forward to HQ</b>	
			<div id="gen">
		<b>Yes</b>
			<input type="radio" name="head" value="yes">
		<b>No</b>
			<input type="radio" name="head" value="no"><span>*</span>
			</div><br>
	</div>
	</form>
		<div id="b10"> 
			<input type="submit" value="SUBMIT" name="ok"></div>
			<div id="b9"> 
			<input type="submit" name="signout" value="SIGNOUT"></div>
		</div>
		<p><b><em>* fields are mandatroy</em></b></p>
</body>
</html>
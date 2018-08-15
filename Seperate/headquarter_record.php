
<html>
<head>
<meta charset="utf-8"/>
<title>HEADQUARTER RECORD</title>
<link rel="stylesheet" href="district_record.css"/>
</head>
<body>
<div class="bc1"></div>
<header>
<form action="" method="post" enctype="multipart/form-data">
<h1>HEADQUARTER RECORD</h1>
</header>
	<div id="b1">
		<b>Aadhar No.</b>
			<input type="text" name="aadhar" size="12" placeholder="" maxlength="12"><span>*</span>
	</div>
	
	<div id="b2">
		<b>Disease Name</b>
			<input type="text" name="disease" size="10" placeholder=""><span>*</span>
	</div>
	<div id="b10">
		<b>Primary Centers ID.</b>	
			<input type="text" name="primaryid" size="10" placeholder=""><span>*</span>
	</div>
	<div id="b3">
		<b>Remark</b>
			<input type="text" name="remark" size="10" placeholder=""><span>*</span>
	</div>
	<div id="b10">
		<b>Operation Remark</b>
			<input type="text" name="opremark" size="10" placeholder=""><span>*</span>
	</div>
	
	<div id="b6">
		<b>No. of data recorded</b>	
			<input type="text" name="datarecord" size="10" placeholder=""><span>*</span>
	</div>	
	<div id="b7">
		<b>SURGERY</b>	
			<div >
		<b>YES</b>
			<input type="radio" name="operate" value="yes">
			<b>NO</b>
			<input type="radio" name="operate" value="no"><span>*</span>
		</div>
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
				</select><span>*</span>
			</div>
			
	</div>
	
	
	<br>
	<div id="ok">
	<input type="submit" name="ok" value="SUBMIT" >
	<input type="submit" name="signout" value="SIGNOUT">
	
	</div>
	</form>
		 <p><b><em>* fields are mandatroy</em></b></p>
		 <footer>
		 	<br><br>
		 </footer>
</body>
</html>
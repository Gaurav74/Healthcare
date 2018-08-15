 
<html>
<head>
<meta charset="utf-8"/>
<title>HEADQUARTER DATA ENTRY</title>
<link rel="stylesheet" href="doc.css"/>
</head>
<body>
 
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
			<input type="file" name="image" a <?php echo "$imgerror"; ?>
			<button type="submit" value="SUBMIT" name="ok">Submit</button></div>
		
		</form>
	
	<p><b><em>* fields are mandatroy</em></b></p>
</body>
</html>

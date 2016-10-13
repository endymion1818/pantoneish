<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('Pantonish.php'); ?>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo pantonish_time_now(); ?><br/>
	<script src="timeCounter.js"></script>
	<script language="JavaScript">
		TargetDate = "<?php echo pantonish_time_now(); ?>";
		CountActive = true;
		CountStepper = 1;
		LeadingZero = true;
		DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
		FinishMessage = "It is finally here!";
	</script>
</body>
</html>

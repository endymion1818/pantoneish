<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<?php 
	function pantonish_time_now(){
		date_default_timezone_set('Europe/London');
		return date('H:i:s');
	}
	?>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		@keyframes rotate {
		  100% {
		    transform: rotateZ(360deg);
		  }
		}
		body {
			margin: 0;
			height: 100vh;
		}
		form[name="clock"] {
			position: absolute;
			bottom: 2%;
			right: 2%;
		}
		input[name="face"] {
			border: 1px solid transparent;
		}
		div.clock {
			display: flex;
			align-items: center;
			justify-content: center;
		}
		svg {
			padding: 4em;
			width: 60vw;
			height: auto;
		}
		#hours {
			transform-origin: 50% 70%;
			animation: rotate 43200s infinite steps(60);
		}
		#minutes {
			transform-origin: 50% 70%;
			animation: rotate 3600s infinite steps(60);
		}
		#seconds {
			transform-origin: 50% 70%;
			animation: rotate 60s infinite steps(60);
		}
	</style>
</head>
<body>
	<div class="clock">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" id="clockface"
			 viewBox="0 0 960 960" style="enable-background:new 0 0 960 960;" xml:space="preserve">
		<rect x="467" width="26" height="99"/>
		<rect x="467" y="861" width="26" height="99"/>
		<rect x="897.5" y="430.1" transform="matrix(9.162721e-04 1 -1 9.162721e-04 1389.2709 -431.3333)" width="26" height="99"/>
		<rect x="36.5" y="430.9" transform="matrix(9.162721e-04 1 -1 9.162721e-04 529.8491 430.4541)" width="26" height="99"/>
		<rect x="840.2" y="215.9" transform="matrix(0.4985 0.8669 -0.8669 0.4985 657.9651 -606.5336)" width="26" height="99"/>
		<rect x="93.8" y="645.1" transform="matrix(0.4985 0.8669 -0.8669 0.4985 655.7075 255.7646)" width="26" height="99"/>
		<rect x="839.5" y="216.3" transform="matrix(0.4985 0.8669 -0.8669 0.4985 657.9631 -605.7411)" width="26" height="99"/>
		<rect x="93.1" y="645.5" transform="matrix(0.4985 0.8669 -0.8669 0.4985 655.7054 256.5571)" width="26" height="99"/>
		<rect x="251.7" y="58.1" transform="matrix(0.8659 -0.5002 0.5002 0.8659 -18.3416 146.8144)" width="26" height="99"/>
		<rect x="682.3" y="803.7" transform="matrix(0.8659 -0.5002 0.5002 0.8659 -333.5149 462.1963)" width="26" height="99"/>
		<rect x="684.6" y="58.2" transform="matrix(0.8638 0.5038 -0.5038 0.8638 149.3005 -336.8016)" width="26" height="99"/>
		<rect x="250.8" y="802" transform="matrix(0.8638 0.5038 -0.5038 0.8638 464.9357 -16.93)" width="26" height="99"/>
		<polygon points="297,526 307,555 544,475 534,446 " id="hours"/>
		<polygon points="443,432 431,446 714,710 729,695 " id="minutes"/>
		<polygon points="487.9,101.9 480.2,102.1 472.2,648.5 482.2,649 " id="seconds"/>
		<circle cx="480" cy="480.8" r="31.9"/>
		<rect x="94.5" y="215.8" transform="matrix(0.5006 -0.8657 0.8657 0.5006 -175.9317 225.5804)" width="26" height="99"/>
		<rect x="839.9" y="646.8" transform="matrix(0.5006 -0.8657 0.8657 0.5006 -176.8253 1086.0637)" width="26" height="99"/>
		</svg>
	</div>
	<form name="clock" onSubmit="0">
		<input type="text" name="face" size=11 value ="<?php echo pantonish_time_now() ?>">
	</form>

	<script language="JavaScript">
	// add class to HTML tag
	(function(H){
		H.className=H.className.replace(/\bno-js\b/,'js')
	})(document.documentElement);
	// clock
	var timerID = null
	var timerRunning = false

	function stopclock(){
	    if(timerRunning)
	        clearTimeout(timerID)
	    timerRunning = false
	}

	function startclock(){
	    stopclock()
	    showtime()
	}

	function showtime(){
	    var now = new Date()
	    var hours = now.getHours()
	    var minutes = now.getMinutes()
	    var seconds = now.getSeconds()
	    var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
	    timeValue  += ((minutes < 10) ? ":0" : ":") + minutes
	    timeValue  += ((seconds < 10) ? ":0" : ":") + seconds
	    timeValue  += (hours >= 12) ? " P.M." : " A.M."
	    document.clock.face.value = timeValue 
	    timerID = setTimeout("showtime()",1000)
	    timerRunning = true
	}
	window.onload = function(){
		startclock()
	}
	</script>
</body>
</html>

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
		html.js #hours {
			x: 485;
			y: 100;
		}
		@keyframes rotate {
		  100% {
		    transform: rotateZ(360deg);
		  }
		}
		body {
			margin: 0;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.timer {
			position: absolute;
			bottom: 2%;
			right: 2%;
		}
		div.clock {
			
		}
		svg {
			padding: 4em;
			width: 60vw;
			height: auto;
		}
		#hours {
			transform-origin: bottom;
		}
		#minutes {
			transform-origin: bottom;
		}
		#seconds {
			transform-origin: bottom;
		}
	</style>
</head>
<body>
	<div class="clock">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 960 960" style="enable-background:new 0 0 960 960;" xml:space="preserve">
			<rect x="803.7" y="252.4" transform="matrix(0.8669 -0.4985 0.4985 0.8669 -18.7346 460.6465)" width="99" height="26"/>
			<rect x="57.3" y="681.6" transform="matrix(0.8669 -0.4985 0.4985 0.8669 -332.0417 145.6966)" width="99" height="26"/>
			<circle cx="483.9" cy="479.6" r="31.9"/>
			<g>
				<rect x="470.9" width="26" height="99"/>
				<rect x="470.9" y="861" width="26" height="99"/>
				<rect x="864.9" y="466.6" width="99" height="26"/>
				<rect x="0.3" y="467.4" width="99" height="26"/>
				<rect x="806.9" y="252.8" transform="matrix(0.8669 -0.4985 0.4985 0.8669 -18.5034 462.2968)" width="99" height="26"/>
				<rect x="60.5" y="682" transform="matrix(0.8669 -0.4985 0.4985 0.8669 -331.8105 147.347)" width="99" height="26"/>
				<rect x="255.6" y="58.1" transform="matrix(0.8659 -0.5002 0.5002 0.8659 -17.7959 148.7821)" width="26" height="99"/>
				<rect x="686.2" y="803.7" transform="matrix(0.8659 -0.5002 0.5002 0.8659 -333.0159 464.1476)" width="26" height="99"/>
				<rect x="652" y="94.7" transform="matrix(0.5038 -0.8638 0.8638 0.5038 255.0425 659.4263)" width="99" height="26"/>
				<rect x="218.2" y="838.5" transform="matrix(0.5038 -0.8638 0.8638 0.5038 -602.7146 653.7419)" width="99" height="26"/>
				<rect x="98.4" y="215.8" transform="matrix(0.5006 -0.8657 0.8657 0.5006 -174.0726 228.9559)" width="26" height="99"/>
				<rect x="843.8" y="646.8" transform="matrix(0.5006 -0.8657 0.8657 0.5006 -174.8501 1089.49)" width="26" height="99"/>
			</g>
			<rect id="hours" x="312.4" y="232.3" transform="matrix(0.457 -0.8895 0.8895 0.457 -174.1942 515.8301)" width="46" height="336.5"/>
			<rect id="minutes" x="350" y="271.5" transform="matrix(0.3601 -0.9329 0.9329 0.3601 92.3156 703.7)" width="418.3" height="26.2"/>
			<rect id="seconds" x="587.7" y="452.4" transform="matrix(0.8843 -0.4669 0.4669 0.8843 -251.4207 356.3238)" width="11.3" height="466.1"/>
		</svg>

	</div>
	<div class="timer"><?= pantonish_time_now() ?></div>

	<script language="JavaScript">
		// clock
		 var hours = document.getElementById('hours'),
		 	 minutes = document.getElementById('minutes'),
		 	 seconds = document.getElementById('seconds');

		window.requestAnimationFrame = window.requestAnimationFrame
		                               || window.mozRequestAnimationFrame
		                               || window.webkitRequestAnimationFrame
		                               || window.msRequestAnimationFrame
		                               || function(f){return setTimeout(f, 1000/60)}


		function updateclock(){
		 var clock = new Date()
		 var hour_as_degree = ( clock.getHours() + clock.getMinutes()/60 ) / 12 * 360
		 var minute_as_degree = clock.getMinutes() / 60 * 360
		 var second_as_degree = ( clock.getSeconds() + clock.getMilliseconds()/1000 ) /60 * 360
		 hours.style.transform = 'rotate(' + hour_as_degree + 'deg)';
		 minutes.style.transform = 'rotate(' + minute_as_degree + 'deg)';
		 seconds.style.transform = 'rotate(' + second_as_degree + 'deg)';
		 requestAnimationFrame(updateclock) //
		};

		requestAnimationFrame(updateclock)

	</script>
</body>
</html>

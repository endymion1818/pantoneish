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
		<style type="text/css">
			.st0{fill:none;}
		</style>
		<rect x="803.7" y="252.4" transform="matrix(0.8669 -0.4985 0.4985 0.8669 -18.7331 460.6466)" width="99" height="26"/>
		<rect x="57.3" y="681.6" transform="matrix(0.8669 -0.4985 0.4985 0.8669 -332.0417 145.6973)" width="99" height="26"/>
		<circle cx="480.2" cy="478.3" r="31.9"/>
		<g>
			<rect x="469" y="0.9" width="25.9" height="98.9"/>
			<rect x="469" y="860.8" width="25.9" height="98.9"/>
			<rect x="861.4" y="466.9" width="98.6" height="26"/>
			<rect x="0.3" y="467.7" width="98.6" height="26"/>
			<polygon points="803.8,279.8 889.2,230.5 902.1,253 816.7,302.3 	"/>
			<polygon points="60.4,708.4 145.8,659.2 158.8,681.7 73.3,731 	"/>
			<polygon points="231.6,72.1 254.1,59.1 303.4,144.7 281,157.7 	"/>
			<polygon points="660.5,816.7 682.9,803.7 732.2,889.3 709.8,902.3 	"/>
			<polygon points="662.6,144.7 712.3,59.3 734.7,72.4 685,157.8 	"/>
			<polygon points="230.6,887.5 280.2,802.1 302.6,815.2 252.9,900.6 	"/>
			<polygon points="61.8,252.4 74.7,229.9 160.1,279.4 147.1,301.9 	"/>
			<polygon points="804.2,682.9 817.2,660.4 902.5,709.9 889.6,732.4 	"/>
		</g>
		<rect x="475.6" y="123.6" width="9" height="354.7" id="seconds"/>
		<rect x="472.5" y="194" width="15.2" height="284.3" id="minutes"/>
		<rect x="465.1" y="248.7" width="30.2" height="229.6" id="hours"/>
		</svg>
	</div>
	<div class="timer"><?= pantonish_time_now() ?></div>

	<script language="JavaScript">
		// clock
		 var 
		 	 background = document.getElementsByTagName('body');
		 	 hours = document.getElementById('hours'),
		 	 minutes = document.getElementById('minutes'),
		 	 seconds = document.getElementById('seconds');

		var pantones = [{"name":"Riverside","value":"#4d6a92"},{"name":"Airy Blue","value":"#93b6d6"},{"name":"Sharkskin","value":"#838488"},{"name":"Aurora Red","value":"#b93a33"},{"name":"Warm Teal","value":"#af9483"},{"name":"Dusty Cedar","value":"#ad5d5e"},{"name":"Lush Meadow","value":"#016e51"},{"name":"Spicy Mustard","value":"#d9ae46"},{"name":"Potter\'s Clay","value":"#9d4726"},{"name":"Bodacious","value":"#b66ba3"}];


//		var colours = JSON.parse(pantones);

//		console.log(colours.colour);

		// for (var i = 0; i < pantones.length; i++){
		//     var obj = pantones[i];
		//     for (var key in obj){
		//         var attrName = key;
		//         var attrValue = obj[attrName];
		//         var colour = (obj[key]);
		//     }
		// }

		// console.log(colour);

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

		 requestAnimationFrame(updateclock) 
		};

		requestAnimationFrame(updateclock)

	</script>
</body>
</html>

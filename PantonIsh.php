<?php
	function pantonish_time_now(){
		date_default_timezone_set('Europe/London');
		return date('M,d,Y,H:i:s');
	}
	function pantonish_time_jsDate(){
		date_default_timezone_set('Europe/London');
		return date('H:i:s');
	}
?>

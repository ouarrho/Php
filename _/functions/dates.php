<?php

	function currentYear(){ 

		return date("Y"); 

	}

	function currentMonth(){ 

		return date("m"); 

	}

	function currentDay(){ 

		return date("d"); 

	}

	function currentTime(){ 

    	return date("H:i"); 

	}

	function currentTimeFull(){ 

    	return date("H:i:s"); 

	}

	function currentDate(){ 

    	return date("d-m-Y"); 

	}

    function currentDateTime(){ 

    	return date("d-m-Y").' '.date("H:i"); 

    }

    function currentDateTimeFull(){ 

    	return date("d-m-Y").' '.date("H:i:s"); 

    }

?>
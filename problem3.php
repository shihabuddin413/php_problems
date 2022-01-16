<?php 
	/*
		3. Calculate Leap year.
    */
	echo "Leap Year Calculator";

	function newLine(){ echo "\n"; }
	newLine();

	function leapYearCalculator($year){
		if (($year % 4 == 0) and (($year % 400 == 0) or ($year % 100 != 0))){
			return "$year is a Leap Year";
		} else {
			return "$year is not a Leap Year";
		}
	}

	for ($i=1950; $i<2022; $i+=10){
		echo leapYearCalculator($i);
		newLine();
	}

?>
<?php 
	/*
		1. Create a Student result system using a function. If any one get more than 80 they will score A+ , below 80 but greater than 70 they will score A, and so on.
    */
	echo "Grade Calculator";

	function newLine(){ echo "\n"; }
	newLine();

	function calculatePoint($num){
		$point = $num >= 80 ? "A+" : ( 
				 $num >= 70 ? "A"  : ( 
				 $num >= 60 ? "A-" : ( 
				 $num >= 50 ? "B"  : (
				 $num >= 40 ? "C"  : (
				 $num >= 32 ? "PASS" : "FAIL"
			    )
			  )
			) 
		  )
		);

		return $point;
	}

	for ($i=30; $i<100; $i+=10){
		$point  = calculatePoint ($i);
		newLine();
		echo "Your Number is $i and grade is $point";
	}

?>
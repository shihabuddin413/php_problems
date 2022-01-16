
<?php 
	/*
		4. Age calculator program using a function.
    */
	echo "Age Calculator";

	function newLine(){ echo "\n"; }
	newLine();

	function ageCalculator($birthDate){
		return (2022 - $birthDate);
	}

	for ($i=1995; $i<2010; $i+=2){
		$age = ageCalculator($i);
		echo "Birth Date :$i your age is - {$age} years old";
		newLine();
	}

?>
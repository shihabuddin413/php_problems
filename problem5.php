<?php 

/* 5. Suppose a user have 5 subjects. Take Marks from all Subjects and Calculate an average mark. Must use a function. */

echo "Average Calculator";

function newLine(){ echo "\n"; }
newLine();


function calculateAvg($Subjects){
	$sum = 0 ;
	foreach ($Subjects as $name => $mark) {
		echo ("In $name, you have scored $mark ");
		newLine();
		$sum += $mark;
	}

	newLine();
	$avg = $sum/5;
	echo "Your overall achivement $avg% ";
	newLine();

}

$Subjects = [
	"Math" => 90,
	"Bangla" => 80,
	"English" => 78,
	"ICT" => 88,
	"Biology" => 84
];

calculateAvg($Subjects);
?>


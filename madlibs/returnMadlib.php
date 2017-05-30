<?php

	$file = "madlib_entries.txt";
	$handle = fopen($file, 'a');
	foreach ($_GET as $key => $value) {
		fwrite($handle, $key . ":" . $value . "\n");
	}
	fclose($handle); 


$nounOne = $_GET['nounOne']; 
$nounTwo = $_GET['nounTwo']; 
$nounThree = $_GET['nounThree']; 
$animal = $_GET['animal']; 
$nounFour = $_GET['nounFour']; 
$nounFive = $_GET['nounFive']; 
$verbOne = $_GET['verbOne']; 
$nounSix = $_GET['nounSix']; 
$nounSeven = $_GET['nounSeven']; 
$nounEight = $_GET['nounEight'];
$verbTwo = $_GET['verbTwo'];


	echo ' "Outer Space Poetry" <br><br>
	Twinkle, twinkle little <span style="color:red">'.$nounOne.'</span>,<br>
	How I wonder what you are.<br>
	Up above the <span style="color:red"> '.$nounTwo.' </span> so high.<br>
	Just like a <span style="color:red"> '.$nounThree.' </span>in the sky.<br>
	<br>
	Hey diddle diddle, the <span style="color:red"> '.$animal.'</span><br>
	and the <span style="color:red"> '.$nounFour.'. </span><br>
	The cow jumped over the <span style="color:red"> '.$nounFive.'</span>.<br>
	The little dog <span style="color:red">'.$verbOne.' </span>to see such a sport,<br>
	and the <span style="color:red">'.$nounSix.' </span>ran away with the spoon.<br>
	<br>
	Star light, star bright, first <span style="color:red">'.$nounSeven.' </span>I see tonight.<br>
	I wish I may, I wish I might,<br>
	Have the <span style="color:red">'.$nounEight.'</span> I <span style="color:red">'.$verbTwo.' </span>tonight.'

?>

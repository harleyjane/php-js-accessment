<?php
$nounOne = $_POST['nounOne']; 
$nounTwo = $_POST['nounTwo']; 
$nounThree = $_POST['nounThree']; 
$verbOne = $_POST['verbOne']; 
$verbTwo = $_POST['verbTwo']; 
$verbThree = $_POST['verbThree']; 
$adjectiveOne = $_POST['adjectiveOne']; 
$adjectiveTwo = $_POST['adjectiveTwo']; 
$adjectiveThree = $_POST['adjectiveThree']; 
$pronoun = $_POST['pronoun'];

	print '<p class = "text">Hi! Have you seen my dog? '.$pronoun.' has my '.$nounOne.' 
	and I cannot find him anywhere.';
	print '</br>';
	print 'I hope '.$pronoun.' does not '.$verbOne.' into the '.$nounTwo.'.  The '.$nounThree.'. 
	is very '.$adjectiveOne.'to me. I '.$verbTwo.'  with it everyday.
	If ypu see him approach him '.$adjectiveTwo.' and '.$verbThree.' I will be '.$adjectiveThree.'.';
	print '</p>';


?>
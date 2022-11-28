<!DOCTYPE html>
<html>
<head>
	<title>homewrok 26</title>
</head>
<body>
<?php

	echo"<h1>26-dars uy ishi</h1>";
	
	$x = 10;
	$y = 5;
	$z = ($x+$x * $y+$y);

	echo "<br>";
	echo "Matematik formula: y=2x";
	$x = 10;
	$y = 5;
	echo $x*$x;
	echo "<br>";

	echo "lenght:";
	echo "<br>";
	echo strlen("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam,quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velitesse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
	echo "<br>";

	echo "reverse:";
	echo "<br>";
	echo strrev("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam,quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velitesse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum");
	echo "<br>";
	
	echo "word count:";
	echo "<br>";
	echo str_word_count("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam,quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velitesse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum");
	echo "<br>";
	?>
</body>
</html>
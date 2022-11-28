<!DOCTYPE html>
<html>
<head>
	<title>lesson 28</title>
</head>
<body>
<?php
	$i=1;
	while ($i<=5) {
		echo "Bu raqam: $i<br>";
		$i++;	
	}
	echo "<br>";
	$x=0;
	while ($x<10) {
		echo "Bu raqam: $x<br>";
		$x++;
	}
	echo "<br>";
	$y=0;
	while ($y<100) {
		echo "Bu raqam: $y<br>";
		$y+=9;
	}
	echo "<br>";
	$z=0;
	do{
		echo "Natural son: $z<br>";
		$z++;
	}
	while ($z<=5);
	echo "<br>";
	for ($i=0; $i <10 ; $i++) { 
		print "FOR LOOPi ichidagi son: $i<br>";
	}
	echo "<br>";
	$colors = array("qizil","yashil","sariq","havorang");
	foreach ($colors as $value) {
		echo "FOREACHni qiymatlari: $value ; <br>";
	};
	echo "<br>";
	echo "<h1>BREAK/CONTINIOUS ishlatish</h1>";

	for ($m=0; $m <=15 ; $m++) { 
		if ($m==8) {
			continue;
		}
		echo "BREAK ishlatilgan son: $m ;<br>";
	}
	echo "<br>";
	function xabar(){
		echo "Muaz Academy SUPER!";
	}
	xabar();
	xabar();
	echo "<br>";
	// INDEXED ARRAY 
	$countries = array("1.Uzbekistan","2.Germany","3.USA","4.Great Britian","5,.Russia","6.France","7.Spain","8.China");
	$soni=count($countries);
	echo "Davlatlar soni: $soni ;<br>";
	for ($n=0; $n < $soni ; $n++) { 
		echo $countries[$n];
		echo " ;<br>";
	}
	// Associative
	$yosh = array("Bilol"=>"Bilol 14 yosh.", "Kozim"=>" Kozim 15 yosh.","Sarvar"=>" Sarvar 10 yosh.");
	echo "Sinfdoshim :" .$yosh['Sarvar'];
	echo "<br>";

	//SORTED
	$cars = array("BMW","Audi","Camaro","Dodge","Jaguar","Ford","Lombarghini");
	sort($cars);
	$clen = count($cars);
	for ($c=0; $c <$clen; $c++) { 
		echo $cars[$c];
		echo "<br>";
	}
	$age = array("Bilol"=>"14", "Kozim"=>"15","Sarvar"=>"10");
	asort($age);
	foreach ($age as $x => $x_value) {
		echo "Ism - " .$x. ", Yoshi - " . $x_value;
		echo "<br>";
	}
	echo "<br>";
//Server
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

?>
</body>
</html>
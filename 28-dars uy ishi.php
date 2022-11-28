<!DOCTYPE html>
<html>
<head>
	<title>homework 28</title>
</head>
<body>
	<?php
	echo "Homewrok 28";
	echo "<br>";
	echo(min(0,5,30,34,-10));
 	echo "<br>";
 	echo(max(0,5,30,34,-10));
 	echo "<br>";
 	echo (round(0.40));
 	echo "<br>";
 	echo"Random sonlar 1-1000";
 	echo "<br>";
 	echo (rand(1,1000));
 	echo "<br>";
 	define("muaz", "MUAZ ACADEMY 2022-yil  10-may kuni To'lqinov Muzaffarjon tomonidan asos solingan va shu sanada o'z faoliyatini boshlagan. U hozirgacha 300 ga yaqin o'quvchilarga sifatli ta'lim berib kelmoqda. O'quv markazida matematika, fizika,ona tili va adabiyot, ingliz tili, rus tili, arab tili va boshqa fanlar malakali o'qituvchilar tomonidan o'rgatiladi.");
 	echo muaz;
 	echo "<br>";
 	echo "<h3>Matematik amallar</h3>";echo "<br>";
    $x = 25;
	$y = 65;
	echo "Qoshish: "; echo $x + $y ;echo "<br>";
	echo "Ayirish: "; echo $x - $y ;echo "<br>";
	echo "Ko'paytirish: "; echo $x * $y ;echo "<br>";
	echo "Bo'lish: "; echo $x / $y ;echo "<br>";
	echo "Qoldiq: "; echo $x % $y ;echo "<br>";
	echo "Daraja: "; echo $x ** $y ;echo "<br>";
	echo "<h3>Maktabda qanday bahoga o'qigansiz ?</h3>";echo "<br>";
	$y = 5;
	if ($y<=2) {
		echo "Juda yomon bahoga";
	}
	elseif ((3<=$y)&&($y<=4)) {
		echo "O'rtacha, yaxshi bahoga";
	}
	elseif ((5<=$y)&&($y<=6)) {
		echo "A'lo bahoga";
	}
	elseif (7<=$y) {
		echo "Juda a'lo bahoga (bunday baho maktabda qo'yilmaydi)";
	}
	echo"<br>";
	echo"<h5>Fanlar:</h5>";
	$name = "Matematika";
	switch ($name) {
		case 'Matematika':
			echo "Siz matematika faniga qiziqasiz";
			break;
		case 'Fizika':
			echo "Siz fizika faniga qiziqasiz";
			break;
		case 'Informatika':
			echo "Siz informatika faniga qiziqasiz";
			break;
		case 'Ona tili va adabiyot':
			echo "Siz ona tili va dabiyot faniga qiziqasiz";
			break;
		case 'Geografiya':
			echo "Siz geografiya faniga qiziqasiz";
			break;
		default:
			echo "Siz hech qanday fanga qiziqmaysiz";
			break;
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
		print "FOR LOOP : $i<br>";
	}
	echo "<br>";
	$colors = array("qizil","yashil","sariq","havorang");
	foreach ($colors as $value) {
		echo "FOREACH : $value ; <br>";
	};
	echo "<br>";
	for ($m=0; $m <=15 ; $m++) { 
		if ($m==8) {
			continue;
		}
		echo "BREAK ishlatilgan son: $m ;<br>";
	}
	echo "<br>";
	echo "<h5>Arrays</h5><br>";
	echo "IndexeD";
	echo "<br>";
	$countries = array("1.Uzbekistan","2.Germany","3.USA","4.Great Britian","5,.Russia","6.France","7.Spain","8.China");
	$soni=count($countries);
	echo "Davlatlar soni: $soni ;<br>";
	for ($n=0; $n < $soni ; $n++) { 
		echo $countries[$n];
		echo " ;<br>";
	}
	echo "AssociativE";
	echo "<br>";
	$yosh = array("Bilol"=>"Bilol 14 yosh.", "Kozim"=>" Kozim 15 yosh.","Sarvar"=>" Sarvar 10 yosh.");
	echo "Sinfdoshim :" .$yosh['Sarvar'];
	echo "<br>";

	echo "<h5>Sorted</h5><br>";
	$cars = array("BMW","Audi","Camaro","Dodge","Jaguar","Ford","Lombarghini");
	sort($cars);
	$clen = count($cars);
	for ($c=0; $c <$clen; $c++) { 
		echo $cars[$c];
		echo "<br>";
	}
	echo "<br>";
	$cars = array("BMW","Audi","Camaro","Dodge","Jaguar","Ford","Lombarghini");
	rsort($cars);
	$clen = count($cars);
	for ($c=0; $c <$clen; $c++) { 
		echo $cars[$c];
		echo "<br>";
	}
	echo "<br>";
	$age = array("Bilol"=>"14", "Kozim"=>"15","Sarvar"=>"10");
	asort($age);
	foreach ($age as $x => $x_value) {
		echo "Ism - " .$x. ", Yoshi - " . $x_value;
		echo "<br>";
	}
	echo "<br>";
	$age = array("Bilol"=>"14", "Kozim"=>"15","Sarvar"=>"10");
	arsort($age);
	foreach ($age as $x => $x_value) {
		echo "Ism - " .$x. ", Yoshi - " . $x_value;
		echo "<br>";
	}
	echo "<br>";
	?>

</body>
</html>
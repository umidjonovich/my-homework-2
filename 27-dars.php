<!DOCTYPE html>
<html>
<head>
	<title>lesson 27</title>
</head>
<body>
 <?php
 echo (pi());
 echo "<br>";
 echo(min(0,5,10,20,-8));
 echo "<br>";
 echo(max(0,5,10,20,-8));
 echo "<br>";
 echo(sqrt(100));
 echo "<br>";
 echo (round(0.60));
 echo "<br>";
 echo(round(0.49));
 echo "<br>";
 echo"Random sonlar";
 echo "<br>";
 echo (rand(1,6));
 echo "<br>";
 define("muaz", "MUAZ ACADEMY 2022-yil  10-may kuni To'lqinov Muzaffarjon tomonidan asos solingan va shu sanada o'z faoliyatini boshlagan. U hozirgacha 300 ga yaqin o'quvchilarga sifatli ta'lim berib kelmoqda. O'quv markazida matematika, fizika,ona tili va adabiyot, ingliz tili, rus tili, arab tili va boshqa fanlar malakali o'qituvchilar tomonidan o'rgatiladi.");
 echo muaz;
 echo "<br>";
 define("Moshina", ["Matiz","Spark","Nexia","Gentra","Kobalt","Malibu"]);
 echo "Mani moshinam : ";
 echo Moshina [rand(0,5)];
 echo "<br>";
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

	echo "<h5>WHAT IF...</h5>";echo "<br>";
	$t= 20;

	// if ($t < 50) {
	// 	echo "Bu berilgan son 50 dan kichik";
	// }
	// else {
	// 	echo "Bu umuman boshqa son";
	// }
	$y = 15;
	if ($y<7) {
		echo "Siz bolalik davridasiz";
	}
	elseif ((8<$y)&&($y<18)) {
		echo "Siz o'smirlik davridasiz";
	}
	elseif ((19<$y)&&($y<30)) {
		echo "Siz yoshlik davridasiz";
	}
	elseif ((31<$y)&&($y<55)) {
		echo "Siz o'rta yoshdasiz";
	}
	elseif (56<$y) {
		echo "Siz qarib qolibsiz";
	}
	echo"<br>";
	echo"<br>";
	echo"<h5>Ranglar:</h5>";
	$rang = "qizil";
	switch ($rang) {
		case 'qizil':
			echo "Siz qizil rangni yoqtirasiz";
			break;
		case 'qora':
			echo "Siz qora rangni yoqtirasiz";
			break;
		case 'yashil':
			echo "Siz yashil rangni yoqtirasiz";
			break;
		case 'havorang':
			echo "Siz havorang rangni yoqtirasiz";
			break;
		case 'sariq':
			echo "Siz sariq rangni yoqtirasiz";
			break;
		default:
			echo "Sizga hech qanday rang yoqmaydi";
			break;
	}
 ?>

</body>
</html>
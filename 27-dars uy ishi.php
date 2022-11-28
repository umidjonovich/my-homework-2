<!DOCTYPE html>
<html>
<head>
	<title>homework 27</title>
</head>
<body>
<?php
 define("Moshina", ["Mersades-Benz","BMW","Bentley","Rolls-Roys","Tesla","Range-Rover","Lombarghini","Ferrari","Aston Martin","Wolks-Wagen","Pegue","Mitsubishi","Camaro Chevrolette","JEAP","Toyota","Lada","Subaru","Lincoln","Mini","Hyundai","Honda","Hummer","Jaguar"]);
 echo "My future car : ";
 echo Moshina [rand(0,22)];
 echo "<br>";
 define("FC", ["Real Madrid","Barselona","Man City","Man United","Bayern Munch","Arsenal","Liverpool","Chelsea","PSG","Milan","Napoli","Sporting","Benfica","Juventus","Ajax","Rangers","Atletico Madrid","Porto","Club Brugge","Inter","Tottenham","Frankfurt","Marseille","Salzburg","Celtic","Leipzig","Shakhtar Donetsk","Dortmund","Sevilla","Villarreal","Real Betis","Roma","Real Socedad","Ossasuna","Lazio"]);
 echo "Football Fan Club : ";
 echo FC [rand(0,34)];
 echo "<br>";

 echo "<h3>Matematik amallar</h3>";echo "<br>";
    $x = 7;
	$y = 55;
	echo "Qoshish: "; echo $x + $y ;echo "<br>";
	echo "Ayirish: "; echo $x - $y ;echo "<br>";
	echo "Bo'lish: "; echo $x / $y ;echo "<br>";
	echo "Ko'paytirish: "; echo $x * $y ;echo "<br>";
	echo "Qoldiq: "; echo $x % $y ;echo "<br>";
	echo "Daraja: "; echo $x ** $y ;echo "<br>";
echo "<h3>Maktabda qanday bahoga o'qigansiz ?</h3>";echo "<br>";
	$y = 8;
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
?>
</body>
</html>
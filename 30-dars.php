<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SESSION</title>
</head>
<body>

	<?php
$_SESSION["rang"]="sariq";
$_SESSION["hajmi"]="tonna";
print_r($_SESSION);
echo "<br>";

$email = "muaz@gmail.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, 
FILTER_VALIDATE_EMAIL) === false) {
	echo "$email pochtangiz tog'ri kiritilgan";
}
else {
	echo "$email pochtangiz xato kiritilgan";
}
echo "<br>";

class meva {
	public $name;
	public $color;
	public $sifat;
	public $country;

	function __construct($name, $color, $sifat, $country) {
		$this->name=$name;
		$this->color=$color;
		$this->sifat=$sifat;
		$this->country=$country;
	}
	function __destruct() {
		echo "Siz yoqtiradigan meva bu {$this->name} va uning rangi {$this->color}. {$this->name} {$this->sifat} meva. {$this->name} asosan {$this->country}da o'sadi. {$this->country}da {$this->name}ning juda ko'p turlari bor.";
	}
}

$apple = new meva("Olma","qizil","shirin","O'zbekiston");

?>
</body>
</html>
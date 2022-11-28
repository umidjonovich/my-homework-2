<!DOCTYPE html>
<html>
<head>
	<title>homewrok 29</title>
</head>
<body>
<?php
	$name = $email = $phone = $gender = $comment = $website = $country ="";
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$phone = test_input($_POST["phone"]);
		$gender = test_input($_POST["gender"]);
		$comment = test_input($_POST["comment"]);
		$website = test_input($_POST["website"]);
		$country = test_input($_POST["country"]);	
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data; 
	};
?>
<h2 align="center">Aplication form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	F.I.O: <input type="text" name="name"><br>
	E-mail: <input type="text" name="email"><br>
	Tel: <input type="text" name="phone"><br>
	Web-sayt: <input type="text" name="website">
	Jins: <input type="radio" name="gender" value="female">Ayol
	<input type="radio" name="gender" value="male">Erkak<br>
	Kommentariya: <textarea name="comment" rows="S" cols="40"></textarea><br>
	Davlatlar: <option name="country">
		<select name="Country">
		<option value="USA">USA</option>
		<option value="Germany">Germany</option>
		<option value="Britian">Britian</option>
		<option value="Others">Others</option>
		</select><br>
	</option>
	<input type="submit" name="submit" value="Yuborish">
</form>
<?php
echo "<h2> Natijalar: </h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $website;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
echo "<br>";
echo $country;
echo "<br>";
?>

</body>
</html>
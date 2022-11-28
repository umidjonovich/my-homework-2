<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muaz";

$conn = new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error){
	die("Ma'lumotlar bazasi ulanmadi". $conn->connect_error);
}
echo "Ma'lumotlar bazasi ulandi";

// $sql = "CREATE DATABASE MUAZ";
// if ($conn->query($sql)===TRUE){
// 	echo "Ma'lumotlar bazasi omadli ulandi";
// }
// else {
// 	echo"Xatolik bor ulanmadi" .$conn->error;
// }

// $sql = "CREATE TABLE muazjadval(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL, email VARCHAR(50),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
$sql = "INSERT INTO muazjadval(firstname, lastname, email) VALUES('ODIL','Qodirov','odil@gmail.com')";

if ($conn->query($sql)===TRUE) {
	echo "Yangi jadvalga ma'lumotlar qo'shildi";
}
else {
	echo "Error";
}

$conn->close();


 ?>

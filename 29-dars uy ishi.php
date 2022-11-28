<!DOCTYPE html>
<html>
<head>
	<title>homework 29</title>
	</head>
<body>
<div style="padding: 20px; margin-top: 30px; background-color: lightgrey; height: 1500px">
        <form action="sahifa.php" method="post" >
	    <fieldset>
		<legend>Application form</legend>
	   	 Full name:<br>
	    <input type="text" name="name" placeholder="Full name" required><br>
	    Telephone: <br>
	    <input type="text" name="telephone" placeholder="Phone number" required>
	    <br>
	    Gender<br>
	    <input type="radio" name="Male" value="Male">Male<br>
	    <input type="radio" name="Female" value="Female">Female<br>
	    <br>
	    Country: <br>
		<select name="Country">
		<option value="USA">USA</option>
		<option value="Germany">Germany</option>
		<option value="Britian">Britian</option>
		<option value="Others">Others</option>
		</select><br>
		<input type="submit" name="send" value="Send">
		</fieldset>
		</form>
	</div><br>

<?php
?>
</body>
</html>
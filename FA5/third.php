<?php
session_start();

if(isset($_POST['submit'])){
   $_SESSION['color1'] = $_POST['color1'];
   $_SESSION['color2'] = $_POST['color2'];
   $_SESSION['color3'] = $_POST['color3'];
   $_SESSION['color4'] = $_POST['color4'];
   $_SESSION['color5'] = $_POST['color5'];
   header("Location: results.php");
   exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Favorite Colors</title>
<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
<h2>Enter Your Favorite Colors</h2>
<form method="POST">

<label>Favorite Color 1:</label>
<input type="text" name="color1" required><br>

<label>Favorite Color 2:</label>
<input type="text" name="color2" required><br>

<label>Favorite Color 3:</label>
<input type="text" name="color3" required><br>

<label>Favorite Color 4:</label>
<input type="text" name="color4" required><br>

<label>Favorite Color 5:</label>
<input type="text" name="color5" required><br>

<button type="submit" name="submit">

</button>
</form>
</div>

</body>
</html>
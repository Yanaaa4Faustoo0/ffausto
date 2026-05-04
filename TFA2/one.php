<!DOCTYPE html>
<html>

<head>
<title>Length Converter</title>

<style>
body {
background-color: #d8f3dc; 
font-family: Arial, sans-serif;
}

.container {
width: 320px;
margin: 100px auto;
padding: 20px;
background-color: white;
border-radius: 10px;
text-align: center;
box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

input {
padding: 8px;
width: 80%;
}

input[type="submit"] {
background-color: #52b788;
color: white;
border: none;
border-radius: 5px;
}

.result {
margin-top: 20px;
}
</style>

</head>
<body>

<div class="container">
<h2>Length Conversion</h2>

<form method="post">
<label>Enter value (meters):</label><br>
<input type="number" name="meter" step="any" required><br><br>

<input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$meter = $_POST['meter'];

$centimeter = $meter * 100;
$kilometer = $meter / 1000;
$inch = $meter * 39.37;
$feet = $meter * 3.281;

echo "<div class='result'>";
echo "<p><strong>Meters:</strong> $meter</p>";
echo "<p>Centimeters: $centimeter cm</p>";
echo "<p>Kilometers: $kilometer km</p>";
echo "<p>Inches: $inch in</p>";
echo "<p>Feet: $feet ft</p>";
echo "</div>";
  }
  ?>

</div>

</body>
</html>
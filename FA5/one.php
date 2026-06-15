<<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Info Page</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container">

<h2>Personal Information</h2>
<form method="POST">

<label>First Name:</label>
<input type="text" name="firstname"><br>

<label>Middle Name:</label>
<input type="text" name="middlename"><br>

<label>Last Name:</label>
<input type="text" name="lastname"><br>

<label>Date of Birth:</label>
<input type="text" name="dob"><br>

<label>Address:</label>
<input type="text" name="address"><br>
<button type="submit">Submit</button>

</form>
<?php

if(isset($_POST["firstname"])){

$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$address = $_POST["address"];

echo "<div class='output'>";
echo "<p><b>First Name:</b> $firstname</p>";
echo "<p><b>Middle Name:</b> $middlename</p>";
echo "<p><b>Last Name:</b> $lastname</p>";
echo "<p><b>Date of Birth:</b> $dob</p>";
echo "<p><b>Address:</b> $address</p>";
echo "</div>";
}

?>
</div>
</body>
</html>
 
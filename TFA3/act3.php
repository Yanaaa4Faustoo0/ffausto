<!DOCTYPE html>
<html>
<head>
<title>Activity 3</title>

<style>

body{
font-family: Arial;
background-color: #f2f2f2;
}

table{
width: 50%;
margin: auto;
border-collapse: collapse;
background-color: white;
}

th, td{
border: 1px solid black;
padding: 10px;
text-align: center;
}

2{
text-align: center;
}

</style>
</head>

<body>

<h2>User Defined Function</h2>

<?php

function computeNumbers($a, $b, $c){

$sum = $a + $b + $c;
$difference = $a - $b - $c;

$product = $a * $b * $c;
$quotient = $a / $b / $c;

echo "<table>";

echo "<tr>";
echo "<th colspan='2'>My Parameters Value: $a, $b, $c</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Addition</td>";
echo "<td>".$sum."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Subtraction</td>";
echo "<td>".$difference."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Multiplication</td>";
echo "<td>".$product."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Division</td>";
echo "<td>".$quotient."</td>";
echo "</tr>";

echo "</table>";
}

computeNumbers(25, 13, 6);

?>

</body>
</html>
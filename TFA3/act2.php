<!DOCTYPE html>
<html>
<head>
<title>Activity 2</title>

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

h2{
 text-align: center;
}

</style>
</head>

<body>

<h2>Array Operations</h2>

<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

$sum = 0;
$difference = $numbers[0];
$product = 1;
$quotient = $numbers[0];

foreach($numbers as $num){

$sum = $sum + $num;
$product = $product * $num;
}

for($i = 1; $i < count($numbers); $i++){

$difference = $difference - $numbers[$i];
$quotient = $quotient / $numbers[$i];
}

$list = implode(", ", $numbers);

echo "<table>";

echo "<tr>";
echo "<th>Array List</th>";
echo "<th>".$list."</th>";
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

?>

</body>
</html>
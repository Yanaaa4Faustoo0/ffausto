<!DOCTYPE html>
<html>
<head>
<title>Two-Digit Combinations</title>

<style>
body {
   background-color: #d8f3dc; 
   font-family: Arial, sans-serif;
 }

 .container {
 width: 400px;
 margin: 100px auto;
 padding: 20px;
 background-color: white;
 border-radius: 10px;
 text-align: center;
 box-shadow: 0 0 10px rgba(0,0,0,0.1);
 }

 .result {
 margin-top: 20px;
 text-align: left;
 }
</style>

</head>
<body>

<div class="container">
<h2>Two-Digit Combinations</h2>

<div class="result">
<?php
 for ($i = 0; $i <= 99; $i++) {


    $num = str_pad($i, 2, "0", STR_PAD_LEFT);

 
if ($i < 99) {
 echo $num . ", ";
 } else {
 echo $num;
 }
 }
 ?>
</div>

</div>

</body>
</html>
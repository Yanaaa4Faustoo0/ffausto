<!DOCTYPE html>
<html>

<head>
<title>grade conversion</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Grade Conversion</h2>

<form method="post">
<label>Enter Grade:</label><br>
<input type="number" name="grade" required><br><br>
<input type="submit" value="Convert">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$grade = $_POST['grade'];
 $rank = "";


 if ($grade >= 93 && $grade <= 100) {
        $rank = "A";
        } elseif ($grade >= 90) {
           $rank = "A-";
        } elseif ($grade >= 87) {
           $rank = "B+";
        } elseif ($grade >= 83) {
           $rank = "B";
        } elseif ($grade >= 80) {
           $rank = "B-";
        } elseif ($grade >= 77) {
           $rank = "C+";
        } elseif ($grade >= 73) {
           $rank = "C";
        } elseif ($grade >= 70) {
           $rank = "C-";
        } elseif ($grade >= 67) {
           $rank = "D+";
        } elseif ($grade >= 63) {
           $rank = "D";
        } elseif ($grade >= 60) {
           $rank = "D-";
        } else {
           $rank = "F";
}

echo "<div class='result'>";
echo "<p><strong>Grade:</strong> $grade</p>";
echo "<p><strong>Rank:</strong> $rank</p>";
echo "<img src='qzOw2_7c.jpg' alt='student pic' class='profile-img'>";
echo "</div>";
}
?>

</div>

</body>

</html>
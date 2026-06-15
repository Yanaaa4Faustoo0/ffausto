<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Result Colors</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container">
<h2>My Favorite Colors</h2>
<div class="output">
<p>

My Favorite Color 1:
<span style="color: <?php echo $_SESSION['color1']; ?>;">
<?php echo $_SESSION['color1']; ?>
</span>
</p>
<p>

My Favorite Color 2:
<span style="color: <?php echo $_SESSION['color2']; ?>;">
<?php echo $_SESSION['color2']; ?>
</span>
</p>
<p>

My Favorite Color 3:
<span style="color: <?php echo $_SESSION['color3']; ?>;">
<?php echo $_SESSION['color3']; ?>
</span>
</p>
<p>

My Favorite Color 4:
<span style="color: <?php echo $_SESSION['color4']; ?>;">
<?php echo $_SESSION['color4']; ?>
</span>
</p>
<p>

My Favorite Color 5:
<span style="color: <?php echo $_SESSION['color5']; ?>;">
<?php echo $_SESSION['color5']; ?>

</span>
</p>

</div>

</div>
</body>
</html>
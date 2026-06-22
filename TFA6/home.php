<!DOCTYPE html>

<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Dog Registration</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>

<div class="container">

```
<h2>Dog Registration Form</h2>

<form method="POST" action="">
    <input type="text" name="dogName" placeholder="Dog Name" required>
    <input type="text" name="dogBreed" placeholder="Breed" required>
    <input type="text" name="dogAge" placeholder="Age" required>
    <input type="text" name="dogAddress" placeholder="Address" required>
    <input type="text" name="dogColor" placeholder="Color" required>
    <input type="text" name="dogHeight" placeholder="Height" required>
    <input type="text" name="dogWeight" placeholder="Weight" required>

    <button type="submit">Save Record</button>
</form>
```

<?php

include("includes/db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dogName = $_POST['dogName'];
    $dogBreed = $_POST['dogBreed'];
    $dogAge = $_POST['dogAge'];
    $dogAddress = $_POST['dogAddress'];
    $dogColor = $_POST['dogColor'];
    $dogHeight = $_POST['dogHeight'];
    $dogWeight = $_POST['dogWeight'];

    $insertQuery = "INSERT INTO Dogs
    (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)
    VALUES
    ('$dogName','$dogBreed','$dogAge','$dogAddress','$dogColor','$dogHeight','$dogWeight')";

    if($conn->query($insertQuery) === TRUE){
        echo "<p class='success'>Dog information saved successfully!</p>";
    } else {
        echo "<p class='error'>Error: ".$conn->error."</p>";
    }
}

$getDogs = "SELECT * FROM Dogs";
$result = $conn->query($getDogs);

if($result->num_rows > 0){

    echo "<h3>Registered Dogs</h3>";

    while($dog = $result->fetch_assoc()){

        echo "
        <div class='card'>
            <p><strong>Name:</strong> {$dog['d_name']}</p>
            <p><strong>Breed:</strong> {$dog['d_breed']}</p>
            <p><strong>Age:</strong> {$dog['d_age']}</p>
            <p><strong>Address:</strong> {$dog['d_add']}</p>
            <p><strong>Color:</strong> {$dog['d_color']}</p>
            <p><strong>Height:</strong> {$dog['d_height']}</p>
            <p><strong>Weight:</strong> {$dog['d_weight']}</p>
        </div>";
    }

} else {
    echo "<p>No dog records available.</p>";
}

$conn->close();

?>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RESUME</title>
<style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #f4f4f4;
}

.header {

    background-color: #e0e0e0;
    padding: 30px;
    text-align: center;

}

.header h1 {
    margin: 5px 0;
}

.container {
    display: flex;
    padding: 20px;

}

.left {

    border-right: 1px solid gray;
    width: 35%;
    padding: 20px;

}

.right {
    width: 65%;
    padding: 20px;

}

h3 {
    margin-top: 20px;
}

p {
    margin: 5px 0;

}
</style>

</head>
<body>
<$php

$name = "Fiona Aliya N. Fausto";
$profile = "BSIT Web and Mobile Development";
$contact = [

    "address" => "Madlanghaya Street Taytay Rizal",
    "phone" => "+63-962-942-4371",
    "email" => "ffaustoffiona@gmail.com"

];

$skills = [

    "Basic Web Designs",
    "Basic Python Systems",
    "Basic Frameworks"

];

$languages = [

    "Python",
    "Java",
    "HTML",
    "VUE"

];

$summary = "A BSIT student who is willing to adapt and grow from any situation.";
$education = [

    [

        "school" => "iACADEMY",
        "level" => "Senior High School",
        "date" => "2022 - 2024"

    ],
    [

        "school" => "Siena College of Taytay",
        "level" => "High School",
        "date" => "2018 - 2022"

    ]

];

?>
<div class="header">
<h1><?php echo $name; ?></h1>
</div>

<div class="container">

<div class="left">
<h3>Contact</h3>
<p><?php echo $contact['address']; ?></p>
<p><?php echo $contact['phone']; ?></p>
<p><?php echo $contact['email']; ?></p>

<h3>Skills</h3>
<?php foreach($skills as $skill): ?>
<p>- <?php echo $skill; ?></p>
<?php endforeach; ?>

<h3>Languages</h3>
<?php foreach($languages as $lang): ?>

<p>- <?php echo $lang; ?></p>
<?php endforeach; ?>

</div>
<div class="right">

<h3>Summary</h3>
<p><?php echo $summary; ?></p>

<h3>Education</h3>
<?php foreach($education as $edu): ?>
<p>

<strong><?php echo $edu['school']; ?></strong><br>
<?php echo $edu['level']; ?><br>
<?php echo $edu['date']; ?>

</p>

<?php endforeach; ?>

</div>
</div>
</body>
</html>
 
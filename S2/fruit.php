<!DOCTYPE html>
<html>

<head>
    
    <title>Fruits</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f5f5f5;
        }

        h2{
            text-align: center;
        }

        table{
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<h2>Fruits</h2>

<?php

$fruits = array(

    array(
        "name" => "Apple",
        "desc" => "Can be red/green",
        "facts" => "Apples are rich in fiber.",
        "img" => "images/apple.jpg"
    ),

    array(
        "name" => "Banana",
        "desc" => "Long and yellow",
        "facts" => "Bananas give energy.",
        "img" => "images/banana.jpg"
    ),

    array(
        "name" => "Cherry",
        "desc" => "Small and red",
        "facts" => "Cherries contain antioxidants.",
        "img" => "images/cherry.jpg"
    ),

    array(
        "name" => "Grapes",
        "desc" => "Purple",
        "facts" => "Grapes can be made into raisins.",
        "img" => "images/grapes.jpg"
    ),

    array(
        "name" => "Kiwi",
        "desc" => "Green inside",
        "facts" => "Kiwi has vitamin C.",
        "img" => "images/kiwi.png"
    ),

    array(
        "name" => "Mango",
        "desc" => "Sweet fruit",
        "facts" => "Mango is the national fruit of the Philippines.",
        "img" => "images/mango.jpg"
    ),

    array(
        "name" => "Orange",
        "desc" => "Orange color",
        "facts" => "Orange is rich in vitamin C.",
        "img" => "images/orange.jpg"
    ),

    array(
        "name" => "Papaya",
        "desc" => "Soft fruit",
        "facts" => "Papaya helps digestion.",
        "img" => "images/papaya.jpg"
    ),

    array(
        "name" => "Pineapple",
        "desc" => "A tropical fruit",
        "facts" => "Pineapple has bromelain.",
        "img" => "images/pineapple.png"
    ),

    array(
        "name" => "Watermelon",
        "desc" => "Big and juicy",
        "facts" => "Watermelon contains lots of water.",
        "img" => "images/watermelon.jpg"
    )

);
?>

<table>

<tr>
    <th>Image</th>
    <th>Name</th>
    <th>Description</th>
    <th>Facts</th>
</tr>
<?php

foreach($fruits as $f){

    echo "<tr>";
    echo "<td><img src='".$f['img']."'></td>";
    echo "<td>".$f['name']."</td>";
    echo "<td>".$f['desc']."</td>";
    echo "<td>".$f['facts']."</td>";

    echo "</tr>";
}
?>

</table>

</body>
</html>
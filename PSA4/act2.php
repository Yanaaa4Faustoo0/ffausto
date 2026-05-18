<!DOCTYPE html>
<html>
<head>
    <title>PHP string functions</title>
    <style>

        body{
            font-family: Arial;
            background-color: #f2f2f2;
            margin: 20px;
        }

        h2{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #dddddd;
        }

    </style>
</head>
<body>

<h2>List of Kpop Idols</h2>
<?php

$names = array(
    "jungkook",
    "taehyung",
    "jisoo",
    "cha eunwoo",
    "felix",
    "karina",
    "winter",
    "yeji",
    "bang chan",
    "sunghoon",
    "ryujin",
    "ningning",
    "mark lee",
    "jaehyun",
    "soobin",
    "beomgyu",
    "sana",
    "mina",
    "danielle",
    "haerin"
);

?>

<table>
    <tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of letter "a"</th>
        <th>Reverse Name</th>
    </tr>

<?php
foreach($names as $name){
    $characters = strlen($name);
    $uppercase = ucfirst($name);
    $replace = str_replace(
        array('a','e','i','o','u'),
        '@',
        $name
    );

    $position = strpos($name, 'a');
    if($position === false){
        $position = "No letter a";
    }

    $reverse = strrev($name);

?>
    <tr>

        <td><?php echo $name; ?></td>
        <td><?php echo $characters; ?></td>
        <td><?php echo $uppercase; ?></td>
        <td><?php echo $replace; ?></td>
        <td><?php echo $position; ?></td>
        <td><?php echo $reverse; ?></td>

    </tr>

<?php
}
?>

</table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0%;
            margin: 0%;
            background-color: #ffffff;
        }
    </style>
</head>
<p></p>
<b></b>
<body>
    <h1>Chào mừng đã đến với bình nguyên vô tận</h1>
    <?php
    $name = "Yi Kai";
    $today =  date("d/m/Y");
    $mssv = "202401162";
    $email = "ykai120506@gmail.com";
    $age = "18";
    $mark = "100";
    $count ="10.000.000.000.000.000";
    
    echo "<p>Xin chào , <b>$name</b>!</p>";
    echo "<p>Mssv :<b> $mssv </b></p>";
    echo "<p>Tuổi :<b>$age</b></p>";
    echo "<p>Địa chỉ điện tử:<b> $email</b></p>";
    echo "<p>Rank handsome by the world:<b>100</b></p>";
    echo "<p>Worth:<b>$count</b>$</p>";


    ?>

</body>

</html>
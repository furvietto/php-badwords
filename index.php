<?php
$lorem = ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, sequi quasi officiis voluptatibus excepturi possimus. Dolorum unde in dolores, molestiae nihil laborum corporis illum praesentium rerum voluptates dignissimos esse accusamus.';
$text = $_GET["text"];
$change = str_replace($text,'***', $lorem);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $lorem?></h1>
    <h2><?php echo $change?></h2>
</body>
</html>
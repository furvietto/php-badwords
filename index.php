<?php
$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure atque id laborum ipsa ut. Accusamus excepturi dicta praesentium culpa nam modi autem consectetur sed. Soluta corrupti placeat eaque dignissimos incidunt?';
$length = strlen($lorem);
$text = $_GET["text"];
$change = str_replace($text,'***', $lorem);
$changeLength = strlen($change);
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
    <!-- testo originale -->
    <h1>Testo originale</h1>
    <div>
        <?php echo $lorem?>
    </div>
    <h1>lunghezza testo originale</h1>
    <div>
    <?php echo $length?>
    </div>
    <!-- /testo originale -->

    <!-- testo modificato -->
    <h2>Testo modificato</h2>
    <div>
        <?php echo $change?>
    </div>
    <h2>lunghezza testo modificato</h2>
    <div>
        <?php echo $changeLength?>
    </div>  
    <!-- /testo modificato -->
</body>
</html>
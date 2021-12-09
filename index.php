<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t3</title>
</head>
<body>
<?php
    $dir = "gmbr";

    // Sort in ascending order - this is default
    $a = scandir($dir);

    foreach ($a as $key => $value) {
        if ('.' !== $value && '..' !== $value) {
            echo "<li><a href='gmbr/".$value."'>".$value."</a></li>";
        }
    }
    ?>
</body>
</html>
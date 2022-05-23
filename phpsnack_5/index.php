<?php

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit nam quasi maxime vel possimus. architecto voluptate numquam consequuntur incidunt tempore corporis. sequi consectetur veritatis earum necessitatibus! Blanditiis veniam culpa quia.";

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

    <?php foreach (explode(".", $text) as $paragraph) { ?>
        <p> <?php echo $paragraph ?></p>
    <?php } ?>
    
</body>
</html>
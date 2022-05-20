<?php

//creiamo un array di partite di basket
$match = [

    [
        'homeSquad' => 'Olimpia Milano',
        'guestSquad' => 'Cantù',
        'homePoints' => '55',
        'guestPoints' => '60'
    ],

    [
        'homeSquad' => 'Roma',
        'guestSquad' => 'Caserta Basket',
        'homePoints' => '75',
        'guestPoints' => '50'
    ],

    [
        'homeSquad' => 'Torino',
        'guestSquad' => 'Avellino',
        'homePoints' => '45',
        'guestPoints' => '60'
    ],

    [
        'homeSquad' => 'Trieste',
        'guestSquad' => 'Magenta',
        'homePoints' => '30',
        'guestPoints' => '60'
    ],



];

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

<?php

    for ($i=0; $i < count($match); $i++) { ?> 
    <div>
        <span><?php echo $match[$i]["homeSquad"]; ?></span>
        -
        <span><?php echo $match[$i]["guestSquad"]; ?></span>
        | 
        <span><?php echo $match[$i]["homePoints"]; ?></span>
        -
        <span><?php echo $match[$i]["guestPoints"]; ?></span>
    </div>
    <br>
    
<?php } ?>
    
</body>
</html>

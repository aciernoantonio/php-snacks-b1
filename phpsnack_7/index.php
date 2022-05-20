<?php

//Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici

$stundents = [

    [
        'nome' => 'Antonio',
        'cognome' => 'Acierno',
        'voti' => [
            'matematica' => 4,
            'storia' => 7,
            'informatica' => 8,
            'economia' => 5
        ]
    ],

    [
        'nome' => 'Alex',
        'cognome' => 'Pitu',
        'voti' => [
            'matematica' => 7,
            'storia' => 5,
            'informatica' => 6,
            'economia' => 9
        ]
    ],

    [
        'nome' => 'Fracco',
        'cognome' => 'Pacco',
        'voti' => [
            'matematica' => 8,
            'storia' => 7,
            'informatica' => 8,
            'economia' => 9
        ]
    ],


    
];

//Stampare Nome, Cognome e la media dei voti di ogni alunno
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

    <?php for ($i=0; $i < count($stundents); $i++) { ?> 
        <div>
            <div>Studente: <?php echo $stundents[$i]["nome"].' '; echo $stundents[$i]["cognome"]; ?></div>
            <div>Media: <?php echo array_sum($stundents[$i]["voti"]) / count($stundents[$i]["voti"]) ?></div>
            <br>
        </div>
    <?php } ?>
    
</body>
</html>
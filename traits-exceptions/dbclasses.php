<?php

require __DIR__ . '/classes/user.php';
require __DIR__ . '/classes/employee.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- Title -->
    <title>Traits & Exceptions</title>
</head>
<body>
    
    <h1>Dipendenti Boolean</h1>

    <?php
        foreach ($employee as $element) { ?>

            <div class="user">
                <h4> <?php echo $element->getMessage() ?>, <?php echo($element->name); ?> </h4>
                <span>I tuoi dati sono: </span>
                <ul>
                    <li> Email: <?php echo($element->email); ?> </li>
                    <li> Livello: <?php echo($element->level); ?> </li>
                    <li> Sconto: <?php echo($element->sconto); ?> </li>
                    <li> Lavoro: <?php echo $element->getWork() ?>  </li>
                </ul>
            </div>
        
        <?php }
    ?>

</body>
</html>
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
    <title>Traits & Exceptions</title>
</head>
<body>
    
    <?php
        foreach ($employee as $element) { ?>

            <div>
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
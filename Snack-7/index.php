<?php
    include __DIR__ . "/data.php";
    include __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto Studenti</title>
</head>
<body>
    <h1>Voto Studenti</h1>
    <ul>
        <?php foreach ($studenti as $studente) { ?>
            <li><?php 
                echo $studente["nome"] . " "; 
                echo $studente["cognome"] . " - "; 
                echo "Media voti: " . media($studente["voti"]);          
            ?>  
            </li> 
        <?php } ?>
    </ul>
</body>
</html>

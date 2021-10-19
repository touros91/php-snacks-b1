<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    // stampo all'interno del codice PHP 
    // if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
    //     echo "Accesso riuscito";
    // } else if ($name != null && $mail!= null && $age != null) {
    //     // uso questo else if al posto di else per fare scomparire la scritta Accesso negato di default sin dall'inizio 
    //     echo "Accesso negato";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inserisci le tue credenziali di accesso</h1>
    <form>
        <input type="text" name="name" id="name" placeholder="Inserisci il tuo nome" size="30">
        <br>
        <input type="text" name="mail" id="mail" placeholder="Inserisci il tuo indirizzo email" size="30" style="margin: 20px 0">
        <br>
        <input type="text" name="age" id="age" placeholder="Inserisci la tua età" size="30">
        <br>
        <button type="submit" style="margin: 20px 0">Accedi</button>
    </form>
    <p>
        <?php
            if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
                echo "<strong>Accesso riuscito</strong>";
            } else if ($name != null && $mail != null && $age != null) {
                // uso questo else if al posto di else per fare scomparire la scritta Accesso negato di default sin dall'inizio 
                echo "<strong>Accesso negato</strong>";
            }
        ?>
    </p>
</body>
</html>
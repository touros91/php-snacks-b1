<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $partite = [
        [
            "squadraCasa" => "Brescia",
            "squadraOspite" => "Virtus Bologna",
            "puntiSquadraCasa" => 65,
            "puntiSquadraOspite" => 70
        ],
        [
            "squadraCasa" => "Trieste",
            "squadraOspite" => "Basket Napoli",
            "puntiSquadraCasa" => 49,
            "puntiSquadraOspite" => 57
        ],
        [
            "squadraCasa" => "Olimpia Milano",
            "squadraOspite" => "Brindisi",
            "puntiSquadraCasa" => 55,
            "puntiSquadraOspite" => 60
        ],
        [
            "squadraCasa" => "Sassari",
            "squadraOspite" => "Treviso",
            "puntiSquadraCasa" => 74,
            "puntiSquadraOspite" => 45
        ],
        [
            "squadraCasa" => "Tortona",
            "squadraOspite" => "Varese",
            "puntiSquadraCasa" => 38,
            "puntiSquadraOspite" => 62
        ],
        [
            "squadraCasa" => "Pesaro",
            "squadraOspite" => "Cremona",
            "puntiSquadraCasa" => 52,
            "puntiSquadraOspite" => 62
        ],
        [
            "squadraCasa" => "Trento",
            "squadraOspite" => "Reggiana",
            "puntiSquadraCasa" => 54,
            "puntiSquadraOspite" => 66
        ],
        [
            "squadraCasa" => "Fortitudo Bologna",
            "squadraOspite" => "Venezia",
            "puntiSquadraCasa" => 79,
            "puntiSquadraOspite" => 57
        ]
    ];
    // for ($i = 0; $i < count($partite); $i++) {
    //     echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiSquadraCasa"] . " - " . $partite[$i]["puntiSquadraOspite"] . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lega Basket Serie A</title>
</head>
<body>
    <h1>Risultati Basket Serie A</h1>
    <p>
       <?php 
            for ($i = 0; $i < count($partite); $i++) {
                echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiSquadraCasa"] . " - " . $partite[$i]["puntiSquadraOspite"] . "<br>";
            }
       ?>
    </p> 
</body>
</html>
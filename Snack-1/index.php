<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $partite = [
        [
            "squadraCasa" => "Germani Brescia",
            "squadraOspite" => "Virtus Segafredo Bologna",
            "puntiSquadraCasa" => 65,
            "puntiSquadraOspite" => 70
        ],
        [
            "squadraCasa" => "Allianz Pallacanestro Trieste",
            "squadraOspite" => "Gevi Napoli",
            "puntiSquadraCasa" => 49,
            "puntiSquadraOspite" => 57
        ],
        [
            "squadraCasa" => "A|X Armani Exchange Milano",
            "squadraOspite" => "Happy Casa Brindisi",
            "puntiSquadraCasa" => 55,
            "puntiSquadraOspite" => 60
        ],
        [
            "squadraCasa" => "Banco di Sardegna Sassari",
            "squadraOspite" => "Nutribullet Treviso Basket",
            "puntiSquadraCasa" => 74,
            "puntiSquadraOspite" => 45
        ],
        [
            "squadraCasa" => "Bertram Derthona Tortona",
            "squadraOspite" => "Openjobmetis Varese",
            "puntiSquadraCasa" => 38,
            "puntiSquadraOspite" => 62
        ],
        [
            "squadraCasa" => "Carpegna Prosciutto Pesaro",
            "squadraOspite" => "Umana Reyer Venezia",
            "puntiSquadraCasa" => 52,
            "puntiSquadraOspite" => 62
        ],
        [
            "squadraCasa" => "Dolomiti Energia Trentino",
            "squadraOspite" => "UNAHOTELS Reggio Emilia",
            "puntiSquadraCasa" => 54,
            "puntiSquadraOspite" => 66
        ],
        [
            "squadraCasa" => "Fortitudo Bologna",
            "squadraOspite" => "Vanoli Basket Cremona",
            "puntiSquadraCasa" => 79,
            "puntiSquadraOspite" => 57
        ]
    ];
    for ($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiSquadraCasa"] . " - " . $partite[$i]["puntiSquadraOspite"] . "<br>";
    }
?>
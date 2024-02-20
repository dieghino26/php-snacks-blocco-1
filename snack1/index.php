<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */


$matches = [
    [
        "home_team" => "CHICAGO BULLS",
        "away_team" => "LOS ANGELES LAKERS",
        "ht_point" =>  102, 
        "at_point" =>  46,
    ],

    [
        "home_team" => "GOLDEN STATE WARRIORS",
        "away_team" => "DALLAS MAVERICKS",
        "ht_point" =>  52, 
        "at_point" =>  76, 
    ],

    [
        "home_team" => "PHILADELPHIA 76ERS",
        "away_team" => "HOUSTON ROCKETS",
        "ht_point" =>  85, 
        "at_point" =>  87, 
    ],

    [
        "home_team" => "SACRAMENTO KINGS",
        "away_team" => "ORLANDO MAGIC",
        "ht_point" =>  132, 
        "at_point" =>  75,
    ],

    [
        "home_team" => "SAN ANTONIO SPURS",
        "away_team" => "UTAH JAZZ",
        "ht_point" =>  102,
        "at_point" =>  53 
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($matches); $i++) :?>
            <li>
                <?=$matches[$i]["home_team"]?> - <?=$matches[$i]["away_team"]?> | <?=$matches[$i]["ht_point"]?>-<?=$matches[$i]["at_point"]?>
            </li>
        <?php endfor?>
    </ul>
</body>
</html>

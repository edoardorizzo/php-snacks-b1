<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. */

$matches = [
    [
        'squadra_casa' => 'Verona',
        'squadra_ospite' => 'Inter',
        'punti_squadra_casa' => 0,
        'punti_squadra_ospite' => 6,
    ],
    [
        'squadra_casa' => 'Monza',
        'squadra_ospite' => 'Roma',
        'punti_squadra_casa' => 1,
        'punti_squadra_ospite' => 1,
    ],
    [
        'squadra_casa' => 'Lazio',
        'squadra_ospite' => 'Sassuolo',
        'punti_squadra_casa' => 2,
        'punti_squadra_ospite' => 0,
    ]
    ];


foreach ($matches as $match) {
    echo $match['squadra_casa'] . ' - ' . $match['squadra_ospite'] . ' ( ' . $match['punti_squadra_casa'] . ' - ' . $match['punti_squadra_ospite'] . ' ) '. ' / ';
  }


?>
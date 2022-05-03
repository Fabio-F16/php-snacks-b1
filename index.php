<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
     $mathDay=[
         [
             'homeTeam' => 'Olimpia Milano',
             'homeScore' => '55',
             'hostTeam' => 'Cantù',
             'hostScore' => '60',
         ],
         [
            'homeTeam' => 'Fortitudo Bologna',
            'homeScore' => '56',
            'hostTeam' => 'Napoli',
            'hostScore' => '64',
        ],
        [
            'homeTeam' => 'VL Pesaro',
            'homeScore' => '75',
            'hostTeam' => 'Venezia',
            'hostScore' => '85',
        ],
        [
            'homeTeam' => 'Derthona',
            'homeScore' => '80',
            'hostTeam' => 'Trieste',
            'hostScore' => '74',
        ],
        [
            'homeTeam' => 'Trento',
            'homeScore' => '69',
            'hostTeam' => 'Reggiana',
            'hostScore' => '77',
        ]
    ];
    // for ($i = 0; $i < count($mathDay); $i++){
    //     $match= $mathDay[$i];
    // //    echo ($match['homeTeam']);
    // }
     
?>

<h2>Match Day</h2>
<h4>Snack 1</h4>

<?php    for ($i = 0; $i < count($mathDay); $i++){

        $match= $mathDay[$i];
        echo '<p>' . $match['homeTeam'] . ' - ' . $match['hostTeam'] .  ' | ' .  $match['homeScore'] . ' - ' . $match['hostScore'] . '</p>' ;

    } 
    
?> 


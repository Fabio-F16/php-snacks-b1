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

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<h2>Access</h2>
<h4>Snack 2</h4>
<?php    

if(isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])){
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    if(strlen($name) > 3 && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age))){
        echo ( '<p>' . 'accesso consentito' . '</p>' );
        }else{
            echo ('<p>' . 'accesso negato' . '</p>');
        }
}

?> 

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP Snacks B1</title>
</head>
<body>
    <div class="container d-flex">
        <h1 class="text-center col-12">PHP Snacks B1</h1>
<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
        <div class="snackUno col-12 col-md-6 ">
            <h2>Snack 1</h2>

            <?php    for ($i = 0; $i < count($mathDay); $i++){

                    $match= $mathDay[$i];
                    echo '<p>' . $match['homeTeam'] . ' - ' . $match['hostTeam'] .  ' | ' .  $match['homeScore'] . ' - ' . $match['hostScore'] . '</p>' ;

                } 

            ?> 
        </div>

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
        <div class="snackDue col-12 col-md-6 ">
            <h2>Snack 2</h2>

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
            }else{
                echo ('<p>' . 'inserire credenziali: name, mail, age' . '</p>' );
            }
            ?> 
        </div>

<!-- Snack 3
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
        <div class="snackTre col-12 col-md-6 ">
            <h2>Snack 3</h2>
            <?php
            $numbers = [];
            while (count($numbers) <  15){
                $randomNumber = rand(1, 100);
                    if(!in_array($randomNumber, $numbers )){
                        $numbers[] = $randomNumber;
                        // echo $randomNumber . ' ';
                        echo ('<p>' .  $randomNumber . '</p>');
                        }
                    }
            ?>
        </div>

<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
        <div class="snackQuattro col-12 col-md-6 ">
            <h2>Snack 4</h2>
            <?php
            $paragraph = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

            $moreParagraph = explode("." , $paragraph);
            // var_dump($moreParagraph);
            for ($i = 0; $i < count($moreParagraph); $i++){
                echo('<p>' . $moreParagraph[$i] . '</p>');
            }
            ?>
        </div>
    </div>

</body>
<style>
    .container{
        flex-wrap: wrap;
    }
    .container > *{
        background-color: rgba(150,255,173,0.41);
        padding: 10px;
        border: 10px solid;
        border-color: white;
        
    }
    h2{
        color: green;
    }
</style>
</html>
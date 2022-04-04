
<!-- PHP SNACK 1 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Partite</title>
</head>
<body>
    
        <h1>Calendario Partite Gennaio</h1>

        <?php

            

            $calendario_gennaio = [

                $prima_sett = [
                    'Prima Settimana',
                    'casa' => 'Torino',
                    'trasferta' => 'Roma',
                    'goal_casa' => '3',
                    'goal_trasferta' => '4'
                ],

                $seconda_sett = [
                    'Seconda settimana',
                    'casa' => 'Salernitana',
                    'trasferta' => 'Milan',
                    'goal_casa' => '1',
                    'goal_trasferta' => '3'
                ],

                $terza_sett = [
                    'Terza settimana',
                    'casa' => 'Fiorentina',
                    'trasferta' => 'La Spezia',
                    'goal_casa' => '0',
                    'goal_trasferta' => '0'
                ],

            ]?>
            
            <?php

            for ($i = 0; $i < 4; $i++) {

                ?>

                <h2><?php $calendario_gennaio[$i][1]?></h2>

                <h4>Avversari: 
                    <span>
                        <?php $calendario_gennaio[$i]['casa']?> vs <?php $calendario_gennaio[$i]['trasferta']
                        ?> Risultato: 
                        <?php $calendario_gennaio[$i]['goal_casa']?> : <?php $calendario_gennaio[$i]['goal_trasferta'] ?>
                    </span>
                </h4>

                <?php

            }

?>

</body>
</html>

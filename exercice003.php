<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Racine</th>
            <th>Racine carrée</th>
        </tr>
        <?php

            for($nombre=1; $nombre<=20; $nombre++)
            {
                echo '<tr>
                        <th>'.$nombre.'</th>
                        <th>'.$nombre**'</th>
                        <th>'.srqt($nombre).'</th>
                    </tr>';
            }

        ?>
    </table>

    <?php
        $nombre= rand(5,15);
        $etape = 0;
        $resultat = 0;

        for($i=$nombre; $i>0; $i--){
            $etape ++;
            $resultat += $nombre;
            echo '<p>Etape : '.$etape.' résultat = '.$resultat.'</p>';
        }
    ?>

    <?php
        $essai = 0;
        do{
            $essai ++;
            $nombre= rand(1,20);
            if($nombre<=15)
            echo '<p>Essai '.$essai.' : '.$n.' est trop petit (<16)</p>';
        }while($nombre<=15);
        echo "<p>Le nombre choisi est $nombre</p>";
    ?>

    <?php
        $essai = 0;
        do{
            $essai ++;
            $nombre= rand(1,20);
            if($nombre<=15)
            echo '<p>Essai '.$essai.' : '.$nombre.' est trop petit (<16)</p>';
        }while($nombre<=15);
        echo "<p>Le nombre choisi est $nombre</p>";
    ?>



</body>
</html>
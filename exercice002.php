<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $nombre = rand(1,20);
    echo "<h3> Le nombre tiré au sort est : $nombre</h3>";
    

?>

<?php

    if($nombre >= 1 && $nombre < 5)
    {
        echo "<p> Le nombre est compris entre 1 et 5</p>";
    }
    else if($nombre > 5 && $nombre < 11)
    {
        echo "<p> Le nombre est compris entre 6 et 10</p>";
    }
    else if($nombre > 10 && $nombre < 16)
    {
        echo "<p> Le nombre est compris entre 11 et 15</p>";
    }
    else if($nombre > 16 && $nombre < 21)
    {
        echo "<p> Le nombre est compris entre 16 et 20</p>";
    }

?>


<?php

    $premier = rand(1,100);
    $second = rand(1,100);
    $valeurAbs = abs($premier - $second);
    echo "<p> Chiffre 1 : $premier</p>";
    echo "<p> Chiffre 2 : $second</p>";
    echo "<p> Valeur Absolue : $valeurAbs";

    if($valeurAbs >= 25 && $valeurAbs <= 75)
    {
        echo "<p>La valeur absolue de $premier - $second est compris entre 25 et 75.</p>";
    }
    else if($valeurAbs < 25 or $valeurAbs > 75)
    {
        echo "<p>La valeur absolue de $premier - $second n'est pas compris entre 25 et 75.</p>";
    }

?>

<?php

    $mois = rand(1,12);
    $tableauMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    switch($mois)
    {
        case 1 :
            echo "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 2 :
            echo "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 3 :
            echo "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 4 :
            echo "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 5 :
            echo "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 6 :
            echo "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 7 :
            echo  "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 8 :
            echo  "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 9 :
            echo  "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 10 :
            echo  "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 11 :
            echo  "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
        case 12 :
            echo  "<p>Le mois $mois correspond au mois de $tableauMois</p>";
            break;
    }

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = rand(0,50);
        $b = rand(0,50);
        $c = rand(0,50);

        function equation($a,$b,$c){

            $delta = ($b*$b) - (4*$a*$c);

            if($delta < 0){
                echo '<p>Il n\'y a pas de solution</p>';
            } elseif($delta = 0){
                echo '<p>Il y a une seule solution à l\'équation : c\'est x= '.-$b / (2*$a). '</p>';
            } else{
                echo '<p>Il y a deux solutions qui sont : x1 = ' .(-$b - sqrt($delta)) / (2 * $a). ' et x2 = ' .(-$b + sqrt($delta)) / (2 * $a). '</p>' ;
            }
        }

        equation($a,$b,$c);

    ?>

    <?php

        $guy = [
            "Nom" => "Guy",
            "Âge" => "42",
            "Sexe" => "Homme",
        ];

        $delphine = [
            "Nom" => "Delphine",
            "Âge" => "39",
            "Sexe" => "Femme",
        ];

        function tableau($x){
            echo '<p> Nom : ' .$x["Nom"]. '</p>';
            echo '<p> Âge : ' .$x["Âge"]. '</p>';
            echo '<p> Sexe : ' .$x["Sexe"]. '</p>';
            echo "-------------";
        }

        tableau($guy);
        tableau($delphine);

    ?>

    <?php

                

        $marc = [
            "Nom" => "Marc",
            "Âge" => "25",
            "Sexe" => "Homme",
        ];

        $mathilde = [
            "Nom" => "Mathilde",
            "Âge" => "21",
            "Sexe" => "Femme",
        ];

        $tableauM = [
            $guy, $delphine, $marc, $mathilde
        ];

        foreach($tableauM as $varTab){
            tableau($varTab);
        }




    ?>
</body>
</html>
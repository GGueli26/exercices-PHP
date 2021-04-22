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
    $a = 3;
    $b = 5;
    $c = 7;


    "<p>AVANT PERMUTATION</p>";
    echo "<p>A = $a</p>";
    echo "<p>B = $b</p>";
    echo "<p>C = $c</p>";

    "<p>APRES PERMUTATION</p>";
    echo "<p>A = $b</p>";
    echo "<p>B = $c</p>";
    echo "<p>C = $a</p>";

?>

<?php
    $Nom = "Marie";
    $Nom2 = "Pierre";
    $Age = 29;
    $Age2 = 30;
    $Genre = "homme";
    $Genre2 = "femme";

    echo "<p>$Nom a $Age ans, et c'est un $Genre</p>";
    echo "<p>$Nom2 a $Age2 ans, et c'est un $Genre2</p>";
?>

<?php



$id = [
        'prénom' => 'Guy',
        'nom' => 'Vilain',
        'age' => 42,
        'année' => date('Y', -'age'),
];

?>

<p>Bonjour <?= $id['prénom'] ?> <?=$id['nom'] ?>, tu as <?=$id['age'] ?> ans, tu es probablement né en <?=$id['année'] ?>.</p>
</body>
</html>
<!DOCTYPE html>

<html>

<head>
    <title>Ceci est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
</head>

<body>
<h2>Page de test</h2>
<p>
    Cette page contient du code HTML avec des balises PHP.<br />
    <?php /* Insérer du code PHP ici */ ?>
    Voici quelques petits tests :
</p>

<ul>
    <li style="color: blue;">Texte en bleu</li>
    <li style="color: red;">Texte en rouge</li>
    <li style="color: green;">Texte en vert</li>
</ul>

<?php echo "Ceci est du texte"; ?>

<h1>Ma page web</h1>
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

<?php
echo "J'habite en Chine."; // Cette ligne indique où j'habite

// La ligne suivante indique mon âge
echo "J'ai 92 ans.";
?>

<?php
/* Encore du PHP
Toujours du PHP */
?>

</body>

</html>
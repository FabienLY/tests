<?php

$age = 12;

if ($age < 8)
{
    echo 'Salut Gamin !';
}
elseif ($age == 14)
{
    echo 'Yo, 14 years old boy!!!!!';
}
else
{
    echo 'Salut Bonhomme.';
}
?>

<br />

<?php

$autorisation_entrer = true;

if ($autorisation_entrer) //Si on avait voulu tester l'inverse on aurait ecrit (! $autorisation_entrer)
{
    echo "Bienvenue petit nouveau. :o)";
}
else
{
    echo "T'as pas le droit d'entrer !";
}

?>

    <br />

<?php

if ($age < 8 && $autorisation_entrer)
{
    echo 'Salut petit !';
}
elseif ($age >= 8 && $autorisation_entrer)
{
    echo 'Bonjour Monsieur';
}
else
{
    echo 'entrée interdite';
}
?>

    <br />

<?php

$note = 10;

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
        break;
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
        break;
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
        break;
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
        break;
    case 12:
        echo "Tu es assez bon";
        break;
    case 16:
        echo "Tu te débrouilles très bien !";
        break;
    case 20:
        echo "Excellent travail, c'est parfait !";
        break;
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

<br />

<?php

$age = 24;
$majeur = ($age >= 18) ? true : false; //Les ternaires : des conditions condensées

?>

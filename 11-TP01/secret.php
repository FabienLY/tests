<?php

//Définition du passeword valide
$valid_password = 'kangourou';

// Testons si le mot de passe est correct
if ($_POST['password'] == 'kangourou' ) {

    echo 'Bravo et bienvenu, le code secret de la nasa est le suivant : 156581651684654';
}
else
{
    echo 'Code secret absent ou incorrecte merci de réésayer ... ou pas.';
}

?>
<!-- morceau de code qui permet de formater et de voir le contenu de array, ici des superglobales -->
<pre>
<?php
print_r($_POST);
print_r($_SERVER);
?>
</pre>


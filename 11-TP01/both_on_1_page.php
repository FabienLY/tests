<?php

//Définition du passeword valide
$valid_password = 'kangourou';

// Testons si le mot de passe est correct et si il y a bien un mot de passe fourni
if (isset($_POST['password']) AND $_POST['password'] == 'kangourou' ) {

    echo 'Bravo et bienvenu, le code secret de la nasa est le suivant : 156581651684654';
}
else
{
   ?>
   <html>
    <form action="both_on_1_page.php" method="post">
     <p>Veuillez indiquer le mot de passe secret :<br />
        <input type="password" name="password" /><br />
        <input type="submit" value="Envoyer" />
    </p>
    </form>
    </html>
<?php
}
?>

<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {

    // Testons si le fichier n'est pas trop gros <1Mo
    if ($_FILES['monfichier']['size'] <= 1000000) {

        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            echo 'Fichier bien recu. Merci et bonne journée';
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
        }
    }
    else
    {
        echo 'Je sens bien quelque chose mais c\'est trop gros.';
    }
}
else
{
    echo 'Aucun fichier reçu, merci de recommencer ou de vous barrer. Bonne journée et bisous bisous';
}

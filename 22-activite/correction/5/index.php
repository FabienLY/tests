<?php

//Appel des controlleurs
require('controller/frontend.php');


//Routing
try { 
    //test de l'url
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            //appel du controller 
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {

            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //appel du controller 
                post();
            }
            else {
                
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'updateComment') {

            if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                //appel du controller 
                updateComment( $_GET['id'], $_GET['commentId'],$_POST['author'], $_POST['comment']);
            }
            else {
               
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'comment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                //appel du controller 
                comment( $_GET['commentId'], $_GET['id']);
            }
            else {
                
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {

            if (isset($_GET['id']) && $_GET['id'] > 0) {

                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    //appel du controller 
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {

                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        //appel du controller 
        listPosts();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}

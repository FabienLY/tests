<?php
require('controller/controller.php');
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis pour l\'ajout !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé pour l\'ajout !');
            }
        }
        elseif ($_GET['action'] == 'changeComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                commentView();
            }
            else {
                throw new Exception('Aucun numéro de commentaire envoyé pour modification');
            }
        }
        elseif ($_GET['action'] == 'updateComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    updateComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis pour la modification !');
                }
            }
            else {
                throw new Exception('Aucun numéro de commentaire envoyé pour la modification !');
            }
        }
    }
    else {
        listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
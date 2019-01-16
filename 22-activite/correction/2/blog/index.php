<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

require('controller/frontend.php');

try 
{
    if (isset($_GET['action'])) 
    {
        if ($_GET['action'] == 'list_posts') 
        {
            list_posts();
        }

        elseif ($_GET['action'] == 'display_post') 
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                display_post();
            }
            else 
            {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'add_comment') 
        {
            if (isset($_GET['id']) && $_GET['id'] > 0) 
            {
                if (!empty($_SESSION['pseudo']) && !empty($_POST['comment'])) 
                {
                    add_comment($_GET['id'], $_SESSION['pseudo'], $_POST['comment']);
                }
                else 
                {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else 
            {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'create_account')
        {
            if (isset ($_SESSION['pseudo']))
            {
                throw new Exception('Veuillez vous déconnecter avant de vous inscrire');
            }
            else
            {
                create_account();
            }
        }

        elseif ($_GET['action'] == 'login')
        {
            if (isset ($_SESSION['pseudo']))
            {
                throw new Exception('Veuillez vous déconnecter avant de vous reconnecter');
            }

            else
            {
                login_check($_POST['pseudo'], $_POST['pass']);
            }
        }

        elseif ($_GET['action'] == 'logout')
        {
            logout();
        }

        elseif ($_GET['action'] == 'display_comment') 
        {
            if (isset($_GET['id_post']) && $_GET['id_post'] > 0) 
            {
                if (isset($_GET['id_comment']) && $_GET['id_comment'] > 0) 
                {
                    display_comment($_GET['id_post'], $_GET['id_comment']);
                }
                else 
                {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            else 
            {
                throw new Exception('L\'identifiant du post n\'est pas spécifié');
            }
        }

        elseif ($_GET['action'] == 'modify') 
        {
            if (isset($_GET['id_post']) && $_GET['id_post'] > 0) 
            {
                if (isset($_GET['id_comment']) && $_GET['id_comment'] > 0) 
                {
                    modify($_GET['id_post'], $_GET['id_comment'], $_POST['modification']);
                }
                else 
                {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
            }
            else 
            {
                throw new Exception('L\'identifiant du post n\'est pas spécifié');
            }
        }

        else 
        {
            list_posts();
        }
    }

    else 
    {
        list_posts();
    }
}

catch(Exception $e) 
{
    $error_message = $e->getMessage();
    require('view/frontend/error_view.php');
}
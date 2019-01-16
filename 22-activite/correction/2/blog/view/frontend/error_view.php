<?php 

ob_start();

?>

<br />
<br />
<br />

<?php
// On démarre la session AVANT d'écrire du code HTML
	session_start();
?>

<div id="error">

<h1> ERREUR : <?php echo $error_message;?></h1>

</div>

<?php

$template_content = ob_get_clean();

require('view/frontend/template.php');
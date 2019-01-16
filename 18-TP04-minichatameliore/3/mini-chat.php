<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
	    <form action="minichat_post.php" method="POST">
	        <p>
		        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br/>
		        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br/>
		        <input type="submit" value="Envoyer" />
			</p>
	    </form>
	    <div>
	    	<?php
	    		try
	    		{
	    			include('config.php');
	    			$afficher = $bdd->query('select * from tpchat ORDER BY id DESC LIMIT 0,10');
	    			while ($donnes = $afficher->fetch())
	    			{
	    				?>
	    				<p>
	    					[<?php echo $donnes['datheure'];?>]: <?php echo htmlspecialchars($donnes['pseudo']);?> : <?php echo htmlspecialchars($donnes['message']);?>
	    				</p>
	    			<?php
	    			}
	    		}
	    		catch (Exception $e)
	    		{
	    			die('Erreur : '.$e->getmessage());	
	    		}
	    			?>
	    </div>
    </body>
</html>

<form action="index.php?action=edit&amp;id=<?=$_GET['id']?>&amp;postId=<?=$_GET['postId']?>&amp;" method="post">
	<div>
          <label for="author">Auteur</label><br />
          <input type="text" id="author" name="author" value="<?=$_GET['auteur']?>"/>
    </div>   
    <div>

           <label for="comment"></label><br />

           <textarea id="comment" name="comment"><?=$_GET['comment']?></textarea>

    </div>

    <div>

    <input type="submit" />

    </div>
</form>
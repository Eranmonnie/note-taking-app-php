<?php require base_path("views/partials/header.php");
?>

<h1>Edit Note</h1>
    
<form action="/notes/edit" method="POST" class="form-style" style="margin: 0 auto; width:20em; border:none; background-color: #5cbdb9; padding:20px;">
<input type="hidden" name="__method" value="PATCH">
<input type="hidden" name="id" value="<?=$note['id']?>">
<div><label for="body" style="text-align:center;">Note</label></div> 
<div style="margin-top:0.5em;"> <textarea name="body" id="body" cols="30" rows="10" style="height:30em; width:99%;" required >
<?= $note['notes'] ?>
</textarea></div>
<div class="error" style="color: red; font-size: small;">
    <?php if (isset($err['body']) ) :?>
        <p><?=$err['body'] ?></p>
    <?php endif; ?> 

</div>
<div style="display:flex; justify-content:right;"><button style="margin-top:0.5em;text-align:center;padding:0.5em;  background-color: #ff1e00; border: none; width: 6em; border-radius:0.5em;">Update</button></div> 

</form>
<a href="/notes">cancel</a>
</body>
</html>
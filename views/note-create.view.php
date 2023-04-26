<?php require "partials/header.php";
?>

<h1>Create Note</h1>
    
<form action="/notes/note-create" method="POST" class="form-style" style="margin: 0 auto; width:20em; border:none; background-color: #5cbdb9; padding:20px;">
<div><label for="body" style="text-align:center;">Note</label></div> 

<div style="margin-top:0.5em;"> <textarea name="body" id="body" cols="30" rows="10" style="height:30em; width:99%;"></textarea></div>
<div style="display:flex; justify-content:right;"><button style="margin-top:0.5em;text-align:center;padding:0.5em;  background-color: #ff1e00; border: none; width: 6em; border-radius:0.5em;">Create</button></div> 




</form>
</body>
</html>
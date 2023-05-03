<?php require base_path("views/partials/header.php");
?>

<h1><?=$heading?></h1>
    
<form action="/signup" method="POST" class="form-style" style="margin: 0 auto; width:20em; border:none; background-color: #5cbdb9; padding:20px; ">
<div style="margin-bottom: 0.5em;"><label for="username" >Username</label></div>
<div style="width :100%; margin-bottom: 1em;"><input type="text" name="username" id="username" style="width:100%;"></div>
<div class="error" style="color: red; font-size: small;"></div>
<div style="margin-bottom: 0.5em;"><label for="password" >Password</label></div>
<div style="width :100%;"><input type="password" name="password" id="password" style="width:100%;"></div>
<div class="error" style="color: red; font-size: small;"></div>
<div style="display:flex; justify-content:right;"><button style="margin-top:0.5em;text-align:center;padding:0.5em;  background-color: #ff1e00; border: none; width: 6em; border-radius:0.5em;">Signup</button></div> 




</form>
</body>
</html>
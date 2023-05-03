<?php require base_path("views/partials/header.php");
?>

<h1><?=$heading?></h1>
    
<form action="/signup" method="POST" class="form-style" style="margin: 0 auto; width:20em; border:none; background-color: #5cbdb9; padding:20px; ">
<div style="margin-bottom: 0.5em;"><label for="name" >Name</label></div>
<div style="width :100%; margin-bottom: 1em;"><input type="text" name="name" id="name" value="<?=$_POST['name'] ?? '' ?>" style="width:100%;"></div>
<div class="error" style="color: red; font-size: small;">
    <?php if (isset($err['name']) ) :?>
        <p><?=$err['name'] ?></p>
    <?php endif; ?>
</div>
<div style="margin-bottom: 0.5em;"><label for="email" >Email</label></div>
<div style="width :100%; margin-bottom: 1em;"><input type="text" name="email" id="email" value="<?=$_POST['email'] ?? '' ?>" style="width:100%;"></div>
<div class="error" style="color: red; font-size: small;">
    <?php if (isset($err['email']) ) :?>
        <p><?=$err['email'] ?></p>
    <?php endif; ?>
</div>
<div style="margin-bottom: 0.5em;"><label for="password" >Password</label></div>
<div style="width :100%;"><input type="password" name="password" id="password" value="<?=$_POST['password'] ?? '' ?>" style="width:100%;"></div>
<div class="error" style="color: red; font-size: small;">
    <?php if (isset($err['password']) ) :?>
        <p><?=$err['password'] ?></p>
    <?php endif; ?>
</div>
<div style="display:flex; justify-content:right;"><button style="margin-top:0.5em;text-align:center;padding:0.5em;  background-color: #ff1e00; border: none; width: 6em; border-radius:0.5em;">Signup</button></div> 




</form>
</body>
</html>
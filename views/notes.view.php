
<?php require "partials/header.php"?>

 <h1>NOTES</h1>   
 <ul>
    <?php foreach($notes as $note) : ?>
         <a href="/note?id=<?=$note['id']?>"><li><?=$note['notes']?></li></a>
    <?php endforeach; ?>
 </ul>
</body>
</html>
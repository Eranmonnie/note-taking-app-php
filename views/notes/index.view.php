
<?php require "views/partials/header.php"?>

 <h1>NOTES</h1>   
 <ul>
    <?php foreach($notes as $note) : ?>
         <a href="/note?id=<?=$note['id']?>"><li><?= htmlspecialchars($note['notes']) ?></li></a>
    <?php endforeach; ?>
 </ul>
 
 <div><a href="/notes/note-create">Create</a></div>
</body>
</html>
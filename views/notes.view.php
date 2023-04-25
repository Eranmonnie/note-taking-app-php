<?php

$config = require "config.php";
$db = new Database($config['database'] );

$notes = $db->query('select * from notes where user_id = 3')->fetchAll();

?>

<?php require "partials/header.php"?>

 <h1>NOTES</h1>   
 <ul>
    <?php foreach($notes as $note) : ?>
         <a href="/note?id=<?=$note['id']?>"><li><?=$note['notes']?></li></a>
    <?php endforeach; ?>
 </ul>
</body>
</html>
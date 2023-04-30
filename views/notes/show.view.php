

<?php require base_path("views/partials/header.php")?>

 <h1>NOTE</h1>   
 <p><?= htmlspecialchars($note['notes'])?></p>  

 <!-- Delete -->
 <form action="/note" method="POST">
    <input type="hidden" name = "id" value="<?=$note['id']?>">
    <button>Delete</button>
 </form>
 
 <div><a href="/notes/note-create">Create</a></div>
 
 <div><a href="/notes">Go Back</a></div>
 
    

</body>
</html>
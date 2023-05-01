<?php
$Router->GET("/","controllers/home.controller.php");
$Router->GET("/notes","controllers/notes/index.php");
$Router->GET("/notes/note-create","controllers/notes/create.php");
$Router->GET("/note","controllers/notes/show.php");
$Router->DELETE("/note","controllers/notes/destroy.php");



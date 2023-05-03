<?php
$Router->GET("/","controllers/home.controller.php");
$Router->GET("/notes","controllers/notes/index.php");
$Router->GET("/notes/note-create","controllers/notes/create.php");
$Router->POST("/notes/note-create","controllers/notes/store.php");
$Router->GET("/note","controllers/notes/show.php");
$Router->DELETE("/note","controllers/notes/destroy.php");
$Router->GET("/notes/edit","controllers/notes/edit.php");
$Router->PATCH("/notes/edit","controllers/notes/update.php");
$Router->GET("/signup","controllers/auth/create.php");
$Router->POST("/signup","controllers/auth/store.php");


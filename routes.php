<?php
$Router->GET("/","controllers/home.controller.php");
$Router->GET("/notes","controllers/notes/index.php")->only('auth');
$Router->GET("/notes/note-create","controllers/notes/create.php")->only('auth');
$Router->POST("/notes/note-create","controllers/notes/store.php")->only('auth');
$Router->GET("/note","controllers/notes/show.php")->only('auth');
$Router->DELETE("/note","controllers/notes/destroy.php")->only('auth');
$Router->GET("/notes/edit","controllers/notes/edit.php")->only('auth');
$Router->PATCH("/notes/edit","controllers/notes/update.php")->only('auth');
$Router->GET("/signup","controllers/auth/create.php")->only('guest');
$Router->POST("/signup","controllers/auth/store.php")->only('guest');
$Router->GET("/login","controllers/sessions/create.php")->only('guest');
$Router->POST("/login","controllers/sessions/store.php")->only('guest');


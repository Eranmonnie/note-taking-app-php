<?php
$Router->GET("/","home.controller.php");
$Router->GET("/notes","notes/index.php")->only('auth');
$Router->GET("/notes/note-create","notes/create.php")->only('auth');
$Router->POST("/notes/note-create","notes/store.php")->only('auth');
$Router->GET("/note","notes/show.php")->only('auth');
$Router->DELETE("/note","notes/destroy.php")->only('auth');
$Router->GET("/notes/edit","notes/edit.php")->only('auth');
$Router->PATCH("/notes/edit","notes/update.php")->only('auth');
$Router->GET("/signup","auth/create.php")->only('guest');
$Router->POST("/signup","auth/store.php")->only('guest');
$Router->GET("/login","sessions/create.php")->only('guest');
$Router->POST("/login","sessions/store.php")->only('guest');
$Router->DELETE("/login","sessions/destroy.php")->only('auth');


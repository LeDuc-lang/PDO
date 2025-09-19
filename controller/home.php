<?php 
var_dump('models/personnage.php');
require 'models/_db_connect.php';
require 'models/personnage.php';

$personnages = getAllPersonnages();

$template = 'pages/home';
?>
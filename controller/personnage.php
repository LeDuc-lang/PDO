<?php 
require 'models/_db_connect.php';
require 'models/classes.php';
require 'models/personnages.php';

$classes = getAllClasses();
$personnages = getAllPersonnages();

$template = 'pages/personnage';
?>
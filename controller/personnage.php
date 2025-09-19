<?php 
require 'models/_db_connect.php';
require 'models/classes.php';
require 'models/personnage.php';

$classes = getAllClasses();
$personnages = getAllPersonnages();
// $classe = getClassById($classe_id);

$template = 'pages/personnage';
?>
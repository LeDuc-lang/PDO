<?php
require 'models/_db_connect.php';
require 'models/classes.php';
require 'models/personnage.php';

$classes = getAllClasses();

if ($_POST) {
    $name = $_POST['name'];
    $classe_id = $_POST['classe_id'];
    
    // Générer des stats aléatoires
    $atk = rand(15, 30);    
    $pv = rand(80, 120);   
    $xp = rand(0, 100);     
    
    if (addPersonnage($name, $classe_id, $atk, $pv, $xp)) {
        $message = "Personnage ajouté avec succès ! (PV: $pv, XP: $xp, ATK: $atk)";
    } else {
        $error = "Erreur lors de l'ajout du personnage.";
    }
}

$template = 'admin/add_player';
?>
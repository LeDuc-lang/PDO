<?php
require 'models/_db_connect.php';
require 'models/classes.php';
require 'models/personnage.php';

$classes = getAllClasses();



if ($_POST) {
    $name = $_POST['name'];
    $classe_id = $_POST['classe_id'];
    
    if (addPersonnage($name, $classe_id)) {
        $message = "Personnage ajouté avec succès !";
    } else {
        $error = "Erreur lors de l'ajout du personnage.";
    }
}

$template = 'admin/add_player';
?>
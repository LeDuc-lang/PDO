<?php 
require 'models/_db_connect.php';
require 'models/classes.php';
require 'models/personnage.php';

echo "POST data: ";
var_dump($_POST);
echo "<br>REQUEST_METHOD: " . $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['personnage_id'])) {
    $personnage_id = $_POST['personnage_id'];
    $personnage = getPersonnageById($personnage_id);
    
    if ($personnage) {
        
        if (isset($_POST['action']) && $_POST['action'] === 'delete') {
            if (deletePersonnage($personnage_id)) {
                header('Location: index.php?page=personnage');
                exit;
            }
        }
        elseif (isset($_POST['name'])) {
            $name = $_POST['name'];
            $classe_id = $_POST['classe_id'];

            if (updatePersonnageClasse($personnage_id, $name, $classe_id)) {
                header('Location: index.php?page=personnage');
                exit;
            }
        }
        $classes = getAllClasses();
        $template = 'admin/modify_perso';
    } else {
        header('Location: index.php?page=personnage');
        exit;
    }
} else {
    header('Location: index.php?page=personnage');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Modifier un Personnage</title>
</head>
<body>
    <h1>Modifier un Personnage</h1>
    
    <form action="index.php?page=modify_perso" method="post">
        <input type="hidden" name="personnage_id" value="<?php echo $personnage['id']; ?>">
        
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($personnage['name']); ?>" required>
        
        <label for="classe_id">Classe:</label>
        <select id="classe_id" name="classe_id" required>
            <?php foreach ($classes as $class): ?>
                <option value="<?php echo $class['id']; ?>" 
                    <?php echo ($class['id'] == $personnage['classe_id']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($class['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Modifier">
    </form>

    <form action="index.php?page=modify_perso" method="post">
        <input type="hidden" name="personnage_id" value="<?php echo $personnage['id']; ?>">
        <input type="hidden" name="action" value="delete">
        <input type="submit" value="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce personnage ?')">
    </form>
</body>
</html>
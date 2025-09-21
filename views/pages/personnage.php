<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG - Mes Personnages</title>
</head>
<body>
    <h1>Mes Personnages</h1>
    <ul>
        <?php foreach ($personnages as $personnage): ?>
            <li>
                <strong><?php echo htmlspecialchars($personnage['name']); ?></strong> - Classe: <?php echo htmlspecialchars($personnage['classe_id']); ?>
                <form action="index.php?page=modify_perso" method="post">
                    <input type="hidden" name="personnage_id" value="<?php echo $personnage['id']; ?>">
                    <input type="hidden" name="classe_id" value="<?php echo $personnage['classe_id']; ?>">
                    <input type="submit" value="Modifier">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
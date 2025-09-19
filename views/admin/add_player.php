<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Player</title>
</head>
<body>
    <h1>Ajouter un Personnage</h1>
    <form action="index.php?page=add_player" method="POST">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>

        <label for="class">Classe:</label>
        <select id="class" name="classe_id" required>
            <option value="">-- Choisir une classe --</option>
            <?php foreach ($classes as $class): ?>
                <option value="<?php echo $class['id']; ?>">
                    <?php echo htmlspecialchars($class['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
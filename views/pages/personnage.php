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
        <form action="">
        <?php foreach ($personnages as $personnage): ?>
            <li>
                <strong><?php echo htmlspecialchars($personnage['name']); ?></strong> - Classe: <?php echo htmlspecialchars($personnage['class_id']); ?>
            </li>
        <?php endforeach; ?>
        </form>
    </ul>
</body>
</html>
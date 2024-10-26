<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pokémons</title>
</head>
<body>
<h1>Liste des Pokémons</h1>
<?php if (!empty($pokemons)): ?>
    <?php foreach ($pokemons as $pokemon): ?>
        <h2><?php echo htmlspecialchars($pokemon['name']); ?></h2>
        <p>Type: <?php echo htmlspecialchars($pokemon['type']); ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun Pokémon trouvé.</p>
<?php endif; ?>
</body>
</html>


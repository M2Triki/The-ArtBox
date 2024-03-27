<?php 
include 'oeuvres.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; 
$index = $id - 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'œuvre</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php if (isset($oeuvres[$index])): ?>
        <?php $oeuvre = $oeuvres[$index]; ?>
            <h1><?php echo htmlspecialchars($oeuvre['title']); ?></h1>
            <img src="<?php echo htmlspecialchars($oeuvre['img']); ?>" alt="<?php echo htmlspecialchars($oeuvre['title']); ?>" style="width: 100px; height: auto;">
            <p><?php echo htmlspecialchars($oeuvre['description']); ?></p>
            <p>Artiste : <?php echo htmlspecialchars($oeuvre['author']); ?></p>
    <?php else: ?>
        <p>Oeuvre non trouvée.</p>
    <?php endif; ?>
</body>
</html>

<?php 
include 'oeuvres.php';
$id = $_GET['reference'] ; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'œuvre</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?> <!-- HEADER -->
    <main>
        <?php foreach($oeuvres as $oeuvre) : ?>
           <?php if($_GET['reference'] == $oeuvre['id']) : ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="img/<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['title']; ?>" style="width: 100px; height: auto;">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre['title']; ?></h1>
                        <p class="description"><?php echo $oeuvre['description']; ?></p>
                        <p>Artiste : <?php echo $oeuvre['author']; ?></p>
                    </div>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>
<?php require_once(__DIR__ . '/footer.php'); ?> <!-- FOOTER -->
</body>
</html>

<?php include 'oeuvres.php'; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <main>
        <?php require_once(__DIR__ . '/header.php'); ?> <!-- HEADER -->
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?reference=<?php echo $oeuvre['id']; ?>">
                        <img src="img/<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['title']; ?>">
                        <h2><?php echo $oeuvre['title']; ?></h2>
                        <p class="description"><?php echo $oeuvre['author']; ?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
        <?php require_once(__DIR__ . '/footer.php'); ?> <!-- FOOTER -->
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Pierre Parent</title>
    <base href="/portfolioPP/">
    <link rel="stylesheet" href="/styles/styles.css">
    <script src="/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section id="home" class="presentation">
            <div class="blur">
                <div class="intro">
                    <h1 class="name">Pierre Parent - Développeur web</h1>
                </div>
                <p class="desc">Passionné par le <span>développement web</span> et sensible aux notions <span>d'accessibilités numérique (RGAA)</span></p>
                <div class="link">
                    <a href="/fichier/PP_CV.pdf" class="blur btn" target="_blank" rel="noopener"
                    aria-label="Afficher dans une nouvelle fenêtre le CV de Pierre Parent au format PDF">
                        Afficher mon CV
                    </a>
                </div>
            </div>
        </section>
        <section id="about">
            <?php include 'includes/apropos.php'; ?>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
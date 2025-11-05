<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Pierre Parent</title>
    <base href="/portfolioPP/">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section class="tabs">
            <div class="title">
                <h2 id="tablist-1" class="blur">Mes expériences et projets</h2>
            </div>
            <div class="tablist" role="tablist" aria-labelledby="tablist-1">
                <button id="tab-1"
                    class="blur"
                    type="button"
                    role="tab"
                    aria-selected="true"
                    aria-controls="panel-1">
                    <span>Expériences</span>
                </button>
                <button id="tab-2"
                    class="blur"
                    type="button"
                    role="tab"
                    aria-selected="false"
                    aria-controls="panel-2"
                    tabindex="-1">
                    <span>Projets</span>
                </button>
            </div>
            <div id="panel-1"
                class="tabpanel blur"
                role="tabpanel"
                tabindex="0"
                aria-labelledby="tab-1">
                    <div class="content">
                        <h2>Expériences</h2>
                    </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
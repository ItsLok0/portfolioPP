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
        <script src="js/pages/projects.js"></script>
        <section class="tabs">
            <div class="title">
                <h1 id="tablist-1" class="blur">Expériences et projets</h1>
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
                <h2>Expériences professionnelles</h2>
                <div class="content">
                    <!-- Expérience 1 -->
                    <article class="experience blur">
                        <h3>Développeur Web — Urbilog / Compéthance</h3>
                        <p class="date">Septembre 2022 → Novembre 2024</p>
                        <p class="details">1 an d’alternance + 1 an en CDI</p>
                        <ul>
                            <li>Développement Angular, PHP, Wordpress et Google Script</li>
                            <li>Découverte et mise en pratique de l’accessibilité numérique</li>
                            <li>Travail en mode projet (méthode agile)</li>
                            <li>Participation à un projet en délégation</li>
                        </ul>
                        <p class="tech">
                            <span class="underline">Technologies :</span>
                            Angular, PHP, Wordpress, Git, Google Script
                        </p>
                    </article>

                    <!-- Expérience 2 -->
                    <article class="experience blur">
                        <h3>Développeur Web — Urbilog / Compéthance</h3>
                        <p class="date">Janvier → Février 2022</p>
                        <p class="details">Stage de deuxième année de BTS</p>
                        <ul>
                            <li>Réalisation d’un projet web en HTML, CSS et PHP</li>
                            <li>Création d’un site sous Wordpress</li>
                            <li>Initiation à l’accessibilité numérique</li>
                        </ul>
                        <p class="tech">
                            <span class="underline">Technologies :</span>
                            HTML, CSS, PHP, Wordpress
                        </p>
                    </article>

                    <!-- Expérience 3 -->
                    <article class="experience blur">
                        <h3>Support informatique — Douane de Tourcoing</h3>
                        <p class="date">Juin 2021</p>
                        <p class="details">Stage de première année de BTS</p>
                        <ul>
                            <li>Réalisation critique d’un site intranet</li>
                            <li>Création d’une mini-formation pour un nouvel outil interne</li>
                        </ul>
                        <p class="tech">
                            <span class="underline">Compétences :</span>
                            Analyse, rédaction, pédagogie
                        </p>
                    </article>                 
                </div>
            </div>
            <div id="panel-2"
                class="tabpanel blur isHidden"
                role="tabpanel"
                tabindex="0"
                aria-labelledby="tab-2">
                <h2>Mes projets</h2>
                <div class="content">
                    <!-- Projet 1 -->
                    <article class="projet blur">
                        <h3>Développeur Web — Urbilog / Compéthance</h3>
                        <p class="date">Septembre 2022 → Novembre 2024</p>
                        <p class="details">1 an d’alternance + 1 an en CDI</p>
                        <ul>
                            <li>Développement Angular, PHP, Wordpress et Google Script</li>
                            <li>Découverte et mise en pratique de l’accessibilité numérique</li>
                            <li>Travail en mode projet (méthode agile)</li>
                            <li>Participation à un projet en délégation</li>
                        </ul>
                        <p class="tech">
                            <span class="underline">Technologies :</span>
                            Angular, PHP, Wordpress, Git, Google Script
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
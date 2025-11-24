<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projets et expériences - Portfolio Pierre Parent</title>
    <base href="/portfolioPP/">
    <link rel="stylesheet" href="/styles/styles.css">
    <script src="/js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <script src="/js/pages/projects.js"></script>
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" focusable="false">
                            <path fill="#ffffff" d="M200 48l112 0c4.4 0 8 3.6 8 8l0 40-128 0 0-40c0-4.4 3.6-8 8-8zm-56 8l0 40-80 0C28.7 96 0 124.7 0 160l0 96 512 0 0-96c0-35.3-28.7-64-64-64l-80 0 0-40c0-30.9-25.1-56-56-56L200 0c-30.9 0-56 25.1-56 56zM512 304l-192 0 0 16c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-16-192 0 0 112c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-112z"/>
                        </svg>
                        <h3>Site portfolio</h3>
                        <p class="desc">Création de mon portfolio afin de présenter mes compétences, expériences et projets.</p>
                        <ul class="tech-list">
                            <li>HTML</li>
                            <li>SCSS</li>
                            <li>JavaScript</li>
                        </ul>
                        <div class="project-learning">
                            <h4>Points d'apprentissage :</h4>
                            <ul>
                                <li>Sémantique HTML : sections, article</li>
                                <li>CSS responsive : Flex, grid</li>
                                <li>JavaScript : formulaire, cookie, interactivité</li>
                                <li>Mise en oeuvre de pratiques d'accessibilité</li>
                                <li>UX/UI : design claire et cohérent</li>

                            </ul>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com/ItsLok0/portfolioPP" target="_blank" aria-label="Voir le code source sur Github (nouvelle fenêtre)">
                                <span class="underline">Github</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0-201.4 201.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3 448 192c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 96C35.8 96 0 131.8 0 176L0 432c0 44.2 35.8 80 80 80l256 0c44.2 0 80-35.8 80-80l0-80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 80c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l80 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 96z"/>
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Projet 2 -->
                    <article class="projet blur">
                        <img src="/img/todo-img.png" alt="">
                        <h3>Application To-Do List</h3>
                        <p class="desc">Développement d'une application de gestion de tâches avec Flask, Python et une base de données SQLite.
                        </p>
                        <ul class="tech-list">
                            <li>Python</li>
                            <li>Flask</li>
                            <li>SQLite</li>
                            <li>HTML</li>
                            <li>SCSS</li>
                        </ul>
                        <div class="project-learning">
                            <h4>Points d'apprentissage :</h4>
                            <ul>
                                <li>Flask : route, templates</li>
                                <li>SQLAlchemy : modèle, migrations simples</li>
                                <li>Gestion d'un CRUD simple : ajouter, afficher, supprimer</li>
                                <li>Organisation d'un projet SCSS avec variables, base, layout et composants</li>
                                <li>Mise en oeuvre de pratiques d'accessibilité</li>
                            </ul>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com/ItsLok0/TO-DO-list" target="_blank" aria-label="Voir le code source sur Github (nouvelle fenêtre)">
                                <span class="underline">Github</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0-201.4 201.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3 448 192c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 96C35.8 96 0 131.8 0 176L0 432c0 44.2 35.8 80 80 80l256 0c44.2 0 80-35.8 80-80l0-80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 80c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l80 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 96z"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
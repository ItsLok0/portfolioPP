<script src="js/includes/header.js"></script>
<header class="header">
    <nav class="navbar blur" role="navigation" aria-label="Menu principal">
        <div class="logo">
            <img src="img/logo.png" alt="" width="50" height="50">
        </div>

        <button id="burger" aria-label="Afficher le menu" aria-expanded="false"
        class="menu-burger" aria-controls="main-menu">
            <img src="img/menu-btn.svg" id="imgBtn" alt="">
        </button>

        <div class="nav" id="main-menu">
            <div class="navLink">
                <ul>
                    <li>
                        <a class="link active" href="./">Accueil</a>
                    </li>
                    <li>
                        <a class="link" href="#">À propos</a>
                    </li>
                    <li>
                        <a class="link" href="pages/contact.php">Me contacter</a>
                    </li>
                </ul>
            </div>

            <div class="themeSwap">
                <label class="sr-only" for="theme-selector">Changer de thème :</label>
                <select id="theme-selector">
                    <option value="Redbull" selected>Redbull</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="McLaren">McLaren</option>
                </select>
            </div>
        </div>
    </nav>
</header>
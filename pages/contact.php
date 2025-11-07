<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Pierre Parent</title>
    <base href="/portfolioPP/">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/script.js"></script>
    <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section id="contact" class="contact blur">
            <div class="content">
                <h2>Contact</h2>
                <p>N'hesitez pas à me contacter pour plus d'informations ou pour toute opportunité.</p>

                <div class="info-link">
                    <div class="contact-form">
                        <h3>M'envoyer un email</h3>
                        <form id="contact-form">
                            <label for="user_name" class="sr-only">Nom</label>
                            <input id="user_name" type="text" name="user_name" placeholder="Nom" required />
                            <label for="user_email" class="sr-only">Email</label>
                            <input id="user_email" type="email" name="user_email" placeholder="Email" required />
                            <label for="message" class="sr-only">Entrer votre message</label>
                            <textarea id="message" name="message" placeholder="Message" required></textarea>
                            <input type="text" class="trap" name="trap" tabindex="-1" autocomplete="off"/>
                            <button type="submit">Envoyer</button>
                        </form>
                    </div>
                    <div class="links">
                        <div>  
                            <h3>Liens utiles</h3>
                            <ul>
                                <li>
                                    <a href="https://www.linkedin.com/in/pierre-parent-811533283/" target="_blank" rel="noopener" aria-label="Ouvrir nouvelle fenêtre vers le profil Github de Pierre">
                                        <span class="underline">Linkedin</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0-201.4 201.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3 448 192c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 96C35.8 96 0 131.8 0 176L0 432c0 44.2 35.8 80 80 80l256 0c44.2 0 80-35.8 80-80l0-80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 80c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l80 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 96z"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/ItsLok0n" target="_blank" rel="noopener" aria-label="Ouvrir nouvelle fenêtre vers le profil Github de Pierre">
                                        <span class="underline">Github</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0-201.4 201.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3 448 192c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 96C35.8 96 0 131.8 0 176L0 432c0 44.2 35.8 80 80 80l256 0c44.2 0 80-35.8 80-80l0-80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 80c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l80 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 96z"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <h3>Adresse</h3>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="9" viewBox="0 0 320 512">
                                    <path fill="#ffffff" d="M192 284.4C256.1 269.9 304 212.5 304 144 304 64.5 239.5 0 160 0S16 64.5 16 144c0 68.5 47.9 125.9 112 140.4L128 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-195.6zM168 96c-30.9 0-56 25.1-56 56 0 13.3-10.7 24-24 24s-24-10.7-24-24c0-57.4 46.6-104 104-104 13.3 0 24 10.7 24 24s-10.7 24-24 24z"/>
                                </svg>
                                Tourcoing, France
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>

<script>
    emailjs.init({ publicKey: "lTQey6H_RUSJXE1Ho" });

    document.getElementById('contact-form').addEventListener('submit', (e) => {
        e.preventDefault();

        // Protection contre bots
        if (e.target.trap.value !== "") {
            return;
        }

        emailjs.sendForm('service_qmbkraq', 'template_02sgklv', e.target)
        .then(() => {
            alert('Message envoyé avec succès ✅');
            e.target.reset();
        })
        .catch((error) => {
            alert('Erreur lors de l\'envoie du message ❌');
        });
    });
</script>
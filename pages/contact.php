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
                        <h3><span class="underline">M'envoyer un email</span></h3>
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
                            <h3><span class="underline">Liens utiles</span></h3>
                            <ul>
                                <li>Linkedin</li>
                                <li>Github</li>
                            </ul>
                            <h3><span class="underline">Adresse</span></h3>
                            <p>Tourcoing 59200,</p>
                            <p>France</p>
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
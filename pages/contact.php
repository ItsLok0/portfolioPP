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
                    <p><span>M'envoyer un email</span></p>
                    <form id="contact-form">
                        <input type="text" name="user_name" placeholder="Nom" required />
                        <input type="email" name="user_email" placeholder="Email" required />
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit">Envoyer</button>
                    </form>

                    <script>
                    emailjs.init({ publicKey: "lTQey6H_RUSJXE1Ho" });

                    document.getElementById('contact-form').addEventListener('submit', (e) => {
                        e.preventDefault();
                        emailjs.sendForm('service_qmbkraq', 'template_02sgklv', e.target)
                        .then(() => {
                            alert('Message envoyé ✅');
                            e.target.reset();
                        })
                        .catch((error) => {
                            console.error('Erreur EmailJS:', error);
                            alert('Erreur lors de l\'envoie ❌');
                        });
                    });
                    </script>


                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
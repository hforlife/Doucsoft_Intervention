<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intervention</title>
    <link rel="stylesheet" href="assets/css/loader.css"/>
    <link rel="shortcut icon" href="assets/images/logo-icon.png" type="image/x-icon">
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <div class="content">
        <!-- Contenu de votre site -->
    </div>
    <script>
        // Attend que le chargement de la page soit terminé
        window.addEventListener("load", function() {
            // Redirige vers la page souhaitée après un délai de 3 secondes (3000 millisecondes)
            setTimeout(function() {
                window.location.replace("/login");
            }, 3000); // Délai en millisecondes (ici 3 secondes)
        });
    </script>
</body>

</html>

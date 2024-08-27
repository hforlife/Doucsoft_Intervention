<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Doucsoft_Learning</title>
  <link rel="stylesheet" href="asset/css/styles.css" />
</head>
<body>
  <div class="loader-wrapper">
    <img src="asset/img/DOUCSOFT.jpg" alt="Logo de l'entreprise" class="logo" />
    <div class="loader"></div>
  </div>
  <div class="content">
    <!-- Contenu de votre site -->
  </div>

  <script src="asset/js/script1.js"></script>
  <script>
    // Attend que le chargement de la page soit terminé
    window.addEventListener("load", function() {
      // Redirige vers la page souhaitée après un délai de 3 secondes (3000 millisecondes)
      setTimeout(function() {
        window.location.replace("index");
      }, 1000); // Délai en millisecondes (ici 3 secondes)
    });
  </script>
</body>
</html>
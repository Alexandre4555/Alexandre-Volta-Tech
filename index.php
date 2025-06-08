<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Projets Électroniques - Alexandre Volta</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>🚀 Mes Projets Électroniques</h1>

    <div class="card">
      <h2>🔔 Alarme avec Arduino</h2>
      <img src="images/alarme.jpg" alt="Alarme Arduino">
      <video controls>
        <source src="videos/alarme.mp4" type="video/mp4">
      </video>
      <p>Ce projet utilise un capteur PIR pour détecter les mouvements et déclencher une alarme via Arduino.</p>
    </div>

    <div class="comment-section">
      <h3>💬 Laisse un commentaire</h3>
      <form action="comment.php" method="POST">
        <input type="text" name="nom" placeholder="Ton nom" required>
        <textarea name="commentaire" placeholder="Ton commentaire" required></textarea>
        <input type="submit" value="Envoyer">
      </form>
    </div>

    <div class="commentaires">
      <h3>📃 Commentaires précédents :</h3>
      <?php @readfile("commentaires/commentaires.html"); ?>
    </div>
  </div>
</body>
</html>


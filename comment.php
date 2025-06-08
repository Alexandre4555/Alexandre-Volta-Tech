<?php
$nom = htmlspecialchars($_POST['nom']);
$commentaire = htmlspecialchars($_POST['commentaire']);
$ligne = "<p><strong>$nom</strong>: $commentaire</p>\n";

file_put_contents("commentaires/commentaires.html", $ligne, FILE_APPEND);
header("Location: index.php");
exit;
?>

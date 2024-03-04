<?php
$k = $_GET["k"];

// Chemin vers le fichier
$file = './file';

// Lire le contenu du fichier
$lines = file($file);

// Vérifier si la ligne à supprimer existe
if (isset($lines[$k])) {
    // Supprimer la ligne du tableau
    unset($lines[$k]);

    // Réécrire le contenu mis à jour dans le fichier
    file_put_contents($file, implode('', $lines));

    echo "La ligne $k a été supprimée du fichier.";
} else {
    echo "La ligne $k n'existe pas dans le fichier.";
}
$baseUrl = 'calcul.php';
$new_url = $baseUrl . '?';
header("Location: " . $new_url);

exit();
?>



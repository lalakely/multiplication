<?php
$k = $_GET["k"];
$a = $_GET["a"];
$c = $_GET["c"];
// Chemin vers le fichier
$file = './file';

// Lire le contenu du fichier
$lines = file($file);

// Vérifier si la ligne à modifier existe
if (isset($lines[$k])) {
    // Afficher le contenu de la ligne
    echo "Contenu de la ligne avant modification : " . $lines[$k];

    // Modifier les membres de la ligne
    $lines[$k] = "$a,$c\n"; // Remplacer le contenu de la ligne par "$a,$c\n"

    // Réécrire le contenu mis à jour dans le fichier
    file_put_contents($file, implode('', $lines));

    // Redirection vers une autre page
    $baseUrl = 'calcul.php';
    $new_url = $baseUrl . '?';
    header("Location: " . $new_url);
    exit(); // Assurez-vous d'ajouter exit() après la redirection pour arrêter l'exécution du script
} else {
    echo "La ligne $k n'existe pas dans le fichier.";
}
?>

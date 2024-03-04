<?php
$a = $_GET["a"];
$b = $_GET["b"];

$tab = array();
for ($c = 1; $c <= $b; $c++) {
    $tab[] = array($c, $a);
}

// Chemin vers le fichier texte
$file = './file';

// Convertir le tableau en une chaîne de caractères
$content = '';
foreach ($tab as $row) {
    $content .= implode(',', $row) . "\n"; // Ajouter chaque ligne avec les valeurs séparées par des virgules
}

// Écrire dans le fichier
if (file_put_contents($file, $content) !== false) {
    echo "Le contenu a été écrit dans le fichier avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'écriture dans le fichier.";
}

// Redirection vers calcul.php
$baseUrl = 'calcul.php';
$url = $baseUrl;
header("Location: " . $url);

exit();
?>

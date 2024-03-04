<?php
    $k=$_GET["k"];
    $url = $_SERVER['REQUEST_URI'];
    parse_str(parse_url($url, PHP_URL_QUERY), $params);
    //Élimine l'élément avec clé k 
    unset($params["k"]);
    unset($params[$k - 1]);
    $queryString = http_build_query($params);
    $baseUrl = 'calcul.php';
    $new_url = $baseUrl .'?'.$queryString;
    
    /// Pour les tableaux à deux dimensions
    // $url = $_SERVER['REQUEST_URI'];
    // parse_str(parse_url($url, PHP_URL_QUERY), $donnees);
    // unset($donnees["k"]);
    // unset($donnees[$k]);
    // $requete_get = http_build_query(array("tab" => $donnees));
    //  echo $requete_get;
    // print_r($donnees);
     header("Location: " . $new_url);
     exit();
?>
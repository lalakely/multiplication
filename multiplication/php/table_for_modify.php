<?php
    $url = $_SERVER['REQUEST_URI'];
    parse_str(parse_url($url, PHP_URL_QUERY), $params);
    $queryString = http_build_query($params);
    
    $baseUrl = 'calcul.php';
    $new_url = $baseUrl .'?'.$queryString;
    header("Location: " . $new_url);
?>
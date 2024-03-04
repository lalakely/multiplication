
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        /// Pour un tableau d'une seule dimension 
        for($c = 1 ; $c <= $b ; $c++){
            $tab[] = $a * $c;
        }
        $queryString = http_build_query($tab);
        $baseUrl = 'calcul.php';
        $url = $baseUrl .'?'."a=$a&".$queryString;
        header("Location: " . $url);


        ///Pour les tableaux à deux dimension 
        // $tab=array();
        // for($c = 1 ; $c <= $b ; $c++){
        //     $tab[] = array($c , $a , $a * $c);
        // }
        // $requete_get = http_build_query(array("tab" => $tab));
        // $baseUrl = 'calcul.php';
        // $url = $baseUrl .'?'."a=$a&".$requete_get;
        // header("Location: " . $url);

        exit();
    ?>
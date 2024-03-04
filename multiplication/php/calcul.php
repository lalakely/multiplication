<?php
// Chemin vers le fichier texte
$file = './file';

// Lire le contenu du fichier et le convertir en tableau
$content = file_get_contents($file);
$lines = explode("\n", $content);
$donnees = array();
foreach ($lines as $line) {
    $donnees[] = explode(',', $line);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication - Resultat</title>
    <style>
        @font-face {
            font-family: popins;
            src: url(../font/FontsFree-Net-Poppins-Medium.ttf);
        }
        *{
            margin: 0;
            padding: 0;
            font-family: popins , sans-serif;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(135deg , #153677 , #4e085f);
            padding: 10px;
        }
        .card{
            width:100%;
            max-width: 800px;
            background: #ffffff;
            margin: 20px auto 20px;
            padding: 40px 40px 40px;
            border-radius: 30px;
            box-shadow: #000 5px 5px 40px;
            font-size: 16px ;
        }
        .card h2{
            color: #002765;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .card tbody {
            display: flex;
            flex-direction: column;
        }
        .button{
            background: #4e085f;
            border-radius: 20px;
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            font-weight: bold;
            padding: 0px 15px 0px 15px;
        }
        .modify{
            margin: 0vw 0vw 0vw 8vw;
        }
        .a{
            padding-left : 20px;
            align-items: center;
            background-color: #ccc;
            width: 140px;
            height: 40px;
            border-radius: 20px;
            margin :5px;
        }
        .card a{
            text-decoration: none;
            color:#fff;
        }
        .pair{
            background-color: #153677;
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Résultats</h2>
            <table>
                <tbody>
                <?php
                        $new_params=http_build_query($donnees);
                        $suppr_url = "/multiplication/php/suppr.php?";
                        $mod_url = "/multiplication/php/modify.php?";
                        $index = 0;
                        foreach($donnees as $elt){
                                $result = $elt[0] * $elt[1];
                                if($elt[0] !== ""){
                                    if($elt[0]%2 == 0){
                                        echo "<tr>";
                                        echo "<td class=\"a pair\">$elt[0]</td>
                                        <td class=\"a pair\">$elt[1]</td>
                                        <td class=\"a pair\">$result</td>";
                                        
                                    }
                                    else{
                                        echo "<tr>";
                                        echo "<td class=\"a \">$elt[0]</td>
                                        <td class=\"a \">$elt[1]</td>
                                        <td class=\"a \">$result</td>";
                                    }
                                    echo "<td>
                                            <button class=\"modify button\">
                                                <a href=\"$mod_url&k=$index&c=$elt[0]&a=$elt[1]\">Modifier</a>
                                            </button>
                                        </td>
                                        <td>
                                            <button class=\"button\">
                                                <a href=\"$suppr_url&k=$index\">Supprimer</a>
                                            </button>
                                        </td>                               
                                        </tr>";
                                }  
                                $index++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>



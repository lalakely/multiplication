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
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Résultats</h2>
            <table>
                <tbody>
                <?php
                        $url = $_SERVER['REQUEST_URI'];

                        ///Pour les tableaux à une seule dimension
                        parse_str(parse_url($url, PHP_URL_QUERY), $params);
                        $new_params=http_build_query($params);
                        $suppr_url = "http://www.multiplication.com/suppr.php"."?".$new_params;
                        $mod_url = "http://www.multiplication.com/modify.php"."?".$new_params;
                        $index = 0;

                       
                        foreach($params as $key => $elt){
                            if ($key == 'a'){
                                $a = $elt;
                            }
                            if($index==0){}
                            else{
                                $c = $key +1;
                                echo "<tr>
                                        <td class=\"a\">$a</td>
                                        <td class=\"a\">$c</td>
                                        <td class=\"a\">$elt</td>
                                        <td>
                                            <button class=\"modify button\">
                                                <a href=\"$mod_url&k=$c&c=$c&na=$a\">Modifier</a>
                                            </button>
                                        </td>
                                        <td>
                                            <button class=\"button\">
                                                <a href=\"$suppr_url&k=$c\">Supprimer</a>
                                            </button>
                                        </td>                               
                                        </tr>";
                            }
                        $index++;
                        }

                        ///Pour les tableaux à deux dimensions
                        // parse_str(parse_url($url, PHP_URL_QUERY), $donnees);
                        // $new_params=http_build_query(array("tab" => $donnees));
                        // $suppr_url = "http://www.multiplication.com/suppr.php"."?".$new_params;
                        // foreach($donnees['tab'] as $elt){
                        //         echo "<tr>
                        //                 <td class=\"a\">$elt[0]</td>
                        //                 <td class=\"a\">$elt[1]</td>
                        //                 <td class=\"a\">$elt[2]</td>
                        //                 <td>
                        //                     <button class=\"modify button\">
                        //                         <a href=\"$mod_url&k=$c&c=$c&na=$a\">Modifier</a>
                        //                     </button>
                        //                 </td>
                        //                 <td>
                        //                     <button class=\"button\">
                        //                         <a href=\"$suppr_url&k=$elt[0]\">Supprimer</a>
                        //                     </button>
                        //                 </td>                               
                        //                 </tr>";
                        // }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
   
   
</body>
</html>
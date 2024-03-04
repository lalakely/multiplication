<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication - Resultat</title>
    <link rel="stylesheet" href="../css/test.css">

</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Résultats</h2>
            <table>
                <tbody>
                    <?php
                        $a = $_GET["a"];
                        $b = $_GET["b"];
                        echo "<tr>";
                        echo "<td>A</td>";
                        echo "<td>B</td>";
                        echo "<td>Resultat</td>";
                        echo "</tr>";
                        for($c = 1 ; $c <= $b ; $c++){
                            $result = $a * $c;
                            echo "<tr>";
                            echo "<td class=\"a\">$a</td>
                                <td>$c</td>  
                                <td>$result</td>";
                                echo "<td>
                                            <button>Modifier</button>
                                        </td>";
                                echo "<td>
                                        <button>Supprimer</button>
                                    </td>";
                            echo "</tr>";

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
   
   
</body>
</html>
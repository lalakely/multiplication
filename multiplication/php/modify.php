<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier - multiplication</title>
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
        form{
            width:100%;
            max-width: 540px;
            background: #ffffff;
            margin: 100px auto 20px;
            padding: 40px 40px 40px;
            border-radius: 30px;
            box-shadow: #000 5px 5px 40px;
        }
        form h2{
            color: #002765;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        form p{
            margin :20px auto 0;
        }
        .row{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #edeef0;
            border-radius: 30px;
        }
        input{
            width:250px;
            flex: 1;
            border: none;
            border-bottom: #000 solid 2px;
            outline: none;
            background: transparent;
            padding: 10px;
            margin : 0px 0px 10px 0px;
        }
        button{
            border:none;
            outline: none;
            background: #002765;
            padding:16px 50px;
            color:#ffffff;
            font-weight: bold;
            font-size: 16px;
            cursor:pointer;
            border-radius: 40px;
        }
        .k{
            opacity:0;
        }
        .container_button{
            display: flex;
            justify-content: center;
            margin: 30px auto 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $a=$_GET["a"];
            $c=$_GET["c"];
            $k=$_GET["k"];
            echo "<form action=\"./table_for_modify.php\" method=\"GET\">
                    <h2>Modifier</h2>
                    <input type=\"number\" name=\"k\" value=\"$k\" readonly class=\"k\">
                    <p>Remplacer ici C</p>
                    <input type=\"number\" name=\"c\" value=\"$c\" placeholder=\"Entier\">
                    <p>Remplacer ici A</p>
                    <input type=\"number\" name=\"a\" value=\"$a\" placeholder=\"Entier\">
                    <div class=\"container_button\">
                        <button type=\"submit\">
                            Changer
                        </button>
                    </div>
                </form>";


            
        ?>
    </div>
</body>
</html>
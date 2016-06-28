<html>
    <head>

        <title>Super Volta Unimed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <meta name="description" content="Super Volta Unimed Erechim"/>
        <meta name="author" content="Douglas Perosa"/>

        <link rel="shortcut icon" href="../../img/favicon.ico">

        <link type="text/css" href="styles/left-without.css" rel="stylesheet" />
        <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="lib/jquery.pikachoose.min.js"></script>
        <script type="text/javascript" src="lib/jquery.touchwipe.min.js"></script>

        <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails, navigate" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../css/style3.css" />


        <script language="javascript">
            $(document).ready(function() {
                $("#pikame").PikaChoose();
            });
        </script>

        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=1495973667383279";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>


    </head>
    <body style="background-color: #00995D">

        <div class="pikachoose">           
            <div style="text-align: center; margin-top: 20px; margin-left: 350px; z-index: 999999; position: fixed; top: 0px;">
                <font style="color: white"><b><h2>Imagens do Evento</h2></b></font>
                <div class="fb-share-button" data-href="http://www.unimed-erechim.com.br/supervoltaunimedmtb/catalogos/evento/catalogo_evento.php" data-layout="button"></div>
            </div>
            <ul id="pikame" style="margin-top: 145px">

                <?php
                $path = "images/";
                $diretorio = dir($path);
                $count = 1;
                while ($arquivo = $diretorio->read()) {
                    if ($count > 2) {
                        echo '<li><a href="#'.$arquivo.'"><img src="' . $path . $arquivo . '"/></a><span>Super Volta Unimed MTB</span></li>';
                    }
                    $count++;
                }
                $diretorio->close();
                ?>    

            </ul>


        </div>
        <?php
        $path = "images/";
        $diretorio = dir($path);
        $count = 1;
        while ($arquivo = $diretorio->read()) {
            if ($count > 2) {
                echo '<div class="lb-overlay" id="' . $arquivo . '" style="z-index: 999999; top: -100px">
                            <a href="#page"><button class="btn btn-danger" style="margin-top: 95px; margin-left: 650px"><b>X</b></button></a>
                            <img src="' . $path . $arquivo . '" alt="' . $arquivo . '" />
                        </div>';
            }
            $count++;
        }
        $diretorio->close();
        ?> 

    </body>
</html>

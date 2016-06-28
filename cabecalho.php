<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <title>Super Volta Unimed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8"/>
        <meta name="description" content="Super Volta Unimed Erechim"/>
        <meta name="author" content="Douglas Perosa"/>

        <link rel="shortcut icon" href="img/favicon.ico">

            <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
            <link href="css/estilo.css" type="text/css" rel="stylesheet" />
            <link rel="stylesheet" href="css/gallery.theme.css"/>
            <link rel="stylesheet" href="css/gallery.min.css"/>

            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/functions.js"></script>       

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="jquery.gallerie.js"></script>
            <script src="gallerie.jquery.json"></script>
            <link rel="stylesheet" type="text/css" href="gallerie.css"/>
            <link rel="stylesheet" type="text/css" href="gallerie-effects.css"/>


            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.knob.js"></script>
            <script src="js/jquery.ccountdown.js"></script>
            <script src="js/init.js"></script>

            <style>
                body {
                    background-color: white;
                }

                #gallery {
                    margin-left: auto;
                    margin-right: auto;
                }
            </style>

            <!-- BLOQUEIA F5 E CTRL+R -->
            <script language=javascript>
                document.onkeydown = function() {
                    switch (event.keyCode) {
                        case 116 :
                            event.returnValue = false;
                            event.keyCode = 0;
                            mudamenu('home');
                            window.location.href = '#home';
                            return false;
                        case 82 :
                            if (event.ctrlKey) {
                                event.returnValue = false;
                                event.keyCode = 0;
                                mudamenu('home');
                                window.location.href = '#home';
                                return false;
                            }
                    }
                }
            </script>

            <!-- FACEBOOK -->
            <meta property="og:type"          content="website" />
            <meta property="og:title"         content="Super Volta Unimed MTB" />
            <meta property="og:description"   content="Você curte desafios? Então encare essa!" />


            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=1495973667383279";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

            <!-- RODAPE -->
            <script type="text/javascript">
                window.onload = function() {
                    setInterval(
                            function() {
                                if (document.getElementById("rodapegold").style.display == "none") {
                                    document.getElementById("rodapegold").style.display = "block";
                                    document.getElementById("rodapepatrocinadores").style.display = "none";
                                } else {
                                    document.getElementById("rodapegold").style.display = "none";
                                    document.getElementById("rodapepatrocinadores").style.display = "block";
                                }
                            }
                    , 5000);
                }
            </script>

    </head>
    <body>
        <?php
        error_reporting(0);
        ?>
        <div id="cabecalho" style="background-color: #00995D; width: 100%; height: 85px; z-index: 999999; position: fixed; top: 0px; left: 0px; right: 0px">
            <?php
            include './menu.php';
            ?>
        </div>
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

    </head>
    <body style="background-color: #00995D;">

        <div class="container" style="margin-top: 45px; background-color: white; border-radius: 15px;"><br/>

            <div style="text-align: center">
                <br/><br/>
                <h2><b>Vídeos do Evento</b></h2>
                <div class="fb-share-button" data-href="http://www.unimed-erechim.com.br/supervoltaunimedmtb/videos.php" data-layout="button"></div>
                <br/>
                <b>Vídeo Promocional</b><br/>
                <?php
                include './video.php';
                ?>
                <br/><br/>
                <b>Vídeo Entrevista 20 é Saúde</b><br/>
                <?php
                include './video2.php';
                ?>
                <br/><br/>
                <b>Vídeo Reportagem Programa NA TV</b><br/>
                <?php
                include './video3.php';
                ?>
                <br/><br/><br/>
            </div>
        </div>
        <br/><br/>
    </body>
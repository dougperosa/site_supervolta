<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './cabecalho.php';
?>

<body style="background-color: #00995D;">
    <div class="gallery items-3" style="height: 100%">
        <div id="home" class="control-operator"></div>
        <div id="item-1" class="control-operator"></div>
        <div id="item-2" class="control-operator"></div>
        <div id="item-3" class="control-operator"></div>
        <div id="item-4" class="control-operator"></div>
        <div id="item-5" class="control-operator"></div>

        <figure class="item" id="home" style="margin-top: 85px; margin-left: 0px; height: 1000px">
            <div class="secondary-controls">
                <img src="img/Super-Volta.png"> 
                <br><br>
                <table class="container navbar-wrapper" style="background-color: rgba(0,0,0,0.5); border-radius: 5px">
                    <tr><td>
                            <?php
                            include './video.php';
                            ?>                            
                        </td>
                        <td>
                            <img src="img/unimed44anos.png" style="border-radius: 0px;">
                        </td>
                    </tr>
                </table>
                <?php
                if (empty($_POST['nomeinscrito']) AND empty($_POST['cidadeinscrito'])) {
                    include './popupvideo.php';
                }
                ?>
            </div>
        </figure>

        <figure class="item" id="item1" style="margin-top: 0px; margin-left: 0px;">
            <div class="secondary-controls">    
                <?php
                include './programacao.php';
                ?>
            </div>
        </figure>

        <figure class="item" id="item2" style="margin-top: 0px; margin-left: 0px;">
            <div class="secondary-controls">
                <?php
                //include './inscricao.php';
                ?>
                <img src="img/Inscricoes-Encerrada.png">
            </div>
        </figure>

        <figure class="item" id="item3" style="margin-top: 0px; margin-left: 0px">
            <div class="secondary-controls">
                <?php
                include './trajeto.php';
                ?>
            </div>
        </figure>

        <figure class="item" id="item4" style="margin-top: 0px; margin-left: 0px">
            <div class="secondary-controls">
                <?php
                include './inscritos.php';
                ?>
            </div>
        </figure>

        <figure class="item" id="item5" style="margin-top: 0px; margin-left: 0px">
            <div class="secondary-controls">
                <?php
                include './regulamento.php';
                ?>
            </div>
        </figure>

    </div>
    <div
</body>
<div id="rodapegold" style="display: block">
<?php
include './rodapegold.php';
?>
</div>
<div id="rodapepatrocinadores" style="display: none">
    <?php
include './rodapepatrocinadores.php';
?>
</div>
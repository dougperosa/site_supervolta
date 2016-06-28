<?php

$path = ".\img";
$diretorio = dir($path);
echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
while ($arquivo = $diretorio->read()) {
    echo "<a href='" . $path . $arquivo . "'>" . $arquivo . "</a><br />";
    readfile($path . $arquivo);
}
$diretorio->close();
?>


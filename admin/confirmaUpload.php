<?php

$imagemFinal=$_FILES['imagem']['name'];
$imagemOriginal=$_FILES['imagem']['tmp_name'];

copy($imagemOriginal,"imgs/".$imagemFinal);

?>

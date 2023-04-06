<?php
include('conectadb.php');
$sql = "DELETE FROM tb_usuarios WHERE selecionado = 1";
mysqli_query($link, $sql);
header('Location:index.php');
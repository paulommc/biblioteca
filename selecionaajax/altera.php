<?php
include('conectadb.php');
$id = $_POST['id'];
$op = $_POST['op'];
$sql = "UPDATE tb_usuarios set selecionado = $op WHERE id = $id";
mysqli_query($link,$sql);
exit();
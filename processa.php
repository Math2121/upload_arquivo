<?php


print_r($_FILES['arquivo']);

$nome = $_FILES['arquivo']['name'];
$endereco = $_FILES['arquivo']['tmp_name'];
$caminho = 'files/'.$nome;
try{
move_uploaded_file($endereco, $caminho);

header("Location:index.php");
}catch(Exception $e){
    header("Location:error.php");
}
?>
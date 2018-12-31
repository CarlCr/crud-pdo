<?php
require_once "Crud.php";
/** Created by PhpStorm. User: Carl Cr Date: 08/08/2018 Time: 19:43 */
$crud=new Crud();
$idUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
$BFetch=$crud->selectDB(
    "*",
    "cadastro",
    "where id=?",
    array($idUser)
);

$Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
?>
<h1>Dados do Usuario</h1>
<hr>
<strong>Nome </strong><?php echo $Fetch['nome']?><br>
<strong>Sexo </strong><?php echo $Fetch['sexo']?><br>
<strong>Cidades </strong><?php echo $Fetch['cidade']?><br>

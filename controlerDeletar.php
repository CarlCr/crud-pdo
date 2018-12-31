<?php
require_once "Crud.php";
/** Created by PhpStorm. User: Carl Cr Date: 08/08/2018 Time: 19:43 */
$crud=new Crud();
$idUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
$crud->deleteDB(
    "cadastro",
    "id=?",
    array($idUser)
);
echo "<h1>Dados deletado com sucesso</h1>";


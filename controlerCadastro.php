<?php
require_once "filter.php";
require_once "Crud.php";

if ($acao=='cadastrar')
{
    $crud=new Crud();$crud->insertDB("cadastro", "?,?,?,?", array($id, $nome, $sexo, $cidade));

    echo "Cadastro realizado com sucesso";
}
else{
    $update=new Crud();
    $update->updateDB(
        "cadastro",
        "nome=?,sexo=?,cidade=?",
        "id=?",
        array(
            $nome,
            $sexo,
            $cidade,
            $id
        )
    );
    echo "edição realizada com sucesso";
}

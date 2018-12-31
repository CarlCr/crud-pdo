<?php
require_once "Crud.php";

    if (isset($_GET['id']))
    {
        $acao="editar";
        $crud=new Crud();
        $idUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
        $BFetch=$crud->selectDB(
            "*",
            "cadastro",
            "where id=?",
            array($idUser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $id=$Fetch['id'];
        $nome=$Fetch['nome'];
        $sexo=$Fetch['sexo'];
        $cidade=$Fetch['cidade'];
    }
    else
    {
        $acao="cadastrar";
        $id=0;
        $nome="";
        $sexo="";
        $cidade="";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
</head>
<body>
    <h1><a href="cadastro.php">Cadastro</a></h1>
<div>

    <form name="frmCadastro" id="frmCadastro" action="controlerCadastro.php" method="post">
        <input type="hidden" id="acao" name="acao" value="<?php echo $acao;?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
        <br>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome;?>">
        <br>
        <label for="idade">sexo</label>
        <input type="text" id="sexo" name="sexo" value="<?php echo $sexo;?>">
        <br>
        <label for="cidade">cidede</label>
        <input type="text" id="cidade" name="cidade" value="<?php echo $cidade;?>">
        <br>
        <br>
        <input type="submit" name="enviar_formulario" value="<?php echo $acao;?>">

    </form>

</div>
</body>
</html>

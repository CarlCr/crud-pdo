
<?php
    require_once "Crud.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
</head>
<body>
    <h1><a href="selecao.php">Seleção</a></h1>
<div>
    <table>
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
        <?php
            $crud=new Crud();
            $BFetch=$crud->selectDB(
                    "*",
                    "cadastro",
                    "",
                    array()
            );
            while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
        ?>
                <tr>
                    <td><?php echo $Fetch['nome'];?></td>
                    <td><?php echo $Fetch['sexo'];?></td>
                    <td><?php echo $Fetch['cidade'];?></td>
                    <td>
                        <a href="<?php echo "Visualizar.php?id={$Fetch['id']}"?>">Visualizar</a>
                        <a href="<?php echo "cadastro.php?id={$Fetch['id']}"?>p">Ediatr</a>
                        <a href="<?php echo "Deletar.php?id={$Fetch['id']}"?>">Deletar</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</div>
</body>
</html>

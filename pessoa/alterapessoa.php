<?php
    include('../includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera pessoa</title>

</head>
<body>
    
<form action="alterapessoaexe.php" method="post">
    <fieldset>
        <legend>Alteração de pessoa</legend>
        <br>
        <a href="../index.html"><button type="button">Menu</button></a>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']?>">
        </div>
        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']?>">
        </div>
        <div>
            <label for="cep">Data de nascimento</label>
            <input type="text" name="cep" id="cep" value="<?php echo $row['cep']?>">
        </div>
            <input type="hidden" name="id" value = "<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </fieldset>
</form>
</body>
</html>
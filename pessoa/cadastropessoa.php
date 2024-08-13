<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Área de cadastro</h1>
    <br>
    <a href="../index.html"><button type="button">Menu</button></a>
    <br>
    <form action="cadastropessoaexe.php" method="post">
        <fieldset>
            <legend>Cadastro do Dono</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email" >Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">
            </div>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">
            </div>
            <div>
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep">
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                    include('../includes/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='". $row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                    ?>
                    <label for="cidade">Cidade</label >
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>
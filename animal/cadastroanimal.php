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
    <form action="cadastroanimalexe.php" method="post">
        <fieldset>
            <legend>Cadastro do Animal</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="especie" >Especie</label>
                <input type="text" name="especie" id="especie">
            </div>
            <div>
                <label for="raca">Raça</label>
                <input type="text" name="raca" id="raca">
            </div>
            <div>
                <label for="dt_nasc">Data de nascimento</label>
                <input type="date" name="dt_nasc" id="dt_nasc">
            </div>
            <div>
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade">
            </div>
            <div>
                <label for="castrado">Castrado</label>
                <input type="hidden" name="ativo" id="ativo" value="0">Não castrado
                <input type="checkbox" name="ativo" id="ativo" value="1">Castrado
                <br><br>
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
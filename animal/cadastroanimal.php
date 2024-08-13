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
    <form action="cadastroanimalexe.php" method="post" enctype="multipart/form-data"> <!-- codificação para upload-->
        <fieldset>
            <legend>Cadastro do Animal</legend>
            <div>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*"/>
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="especie" >Espécie</label>
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
                <label for="castrado">Castrado</label>
                <input type="radio" name="castrado" id="castradoSim" value="sim" class="inline" /><label id="castradoSim">Sim</label>
                    <input type="radio" name="castrado" id="castradoNao" value="nao" class="inline" /><label id="castradoNao">Não</label>
                <br><br>
            </div>
            <div>
                <label for="pessoa">Pessoa</label>
                <select name="pessoa" id="pessoa">
                    <?php
                    include('../includes/conexao.php');
                    $sql = "SELECT * FROM pessoa";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='". $row['id']."'>".$row['nome']."/".$row['email']."</option>";
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
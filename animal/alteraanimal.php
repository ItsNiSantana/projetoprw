<?php
    include('../includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM animal WHERE id=$id";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera animal</title>

</head>
<body>
    
<form action="alteraanimalexe.php" method="post">
    <fieldset>
        <legend>Alteração de animal</legend>
        <br>
        <a href="../index.html"><button type="button">Menu</button></a>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
                <label for="especie">Espécie</label>
                <input type="text" name="especie" id="especie" value="<?php echo $row['especie']?>">
        </div>
        <div>
            <label for="raca">Raça</label>
            <input type="text" name="raca" id="raca" value="<?php echo $row['raca']?>">
        </div>
        <div>
            <label for="dt_nasc">Data de nascimento</label>
            <input type="date" name="dt_nasc" id="dt_nasc" value="<?php echo $row['dt_nasc']?>">
        </div>
        <div>
            <label for="idade">Idade</label>
            <input type="number" name="idade" id="idade" value="<?php echo $row['idade']?>">
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
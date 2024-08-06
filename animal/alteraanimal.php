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
        <label>Castrado:</label>
                    <input type="radio" name="castrado" id="castrado_s" value="sim" <?php echo $row['castrado'] == 1 ? "checked" : "" ?> /><label id="castrado_s">Sim</label>
                    <input type="radio" name="castrado" id="castrado_n" value="nao" <?php echo $row['castrado'] == 0 ? "checked" : "" ?> /><label id="castrado_n">Não</label>
        </div>
        <div>
            <label for="pessoa">Dono(a)</label>
                    <select name="pessoa" id="pessoa">
                        <?php
                        include('../includes/conexao.php');
                        $sql = "SELECT * FROM pessoa";
                        $result = mysqli_query($con, $sql);
                        while ($rowPessoa = mysqli_fetch_array($result)) {
                            echo "<option value='" . $rowPessoa['id'] . "' " . ($rowPessoa['id'] == $row['id_pessoa'] ? "selected" : "") . ">" . $rowPessoa['nome'] . "/" . $rowPessoa['email'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            <input type="hidden" name="id" value = "<?php echo $row['id']?>">
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </fieldset>
</form>
</body>
</html>
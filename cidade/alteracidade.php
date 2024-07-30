<?php
    include('../includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALterar cidade</title>
    
</head>
<body>
    
<form action="alteracidadeexe.php" method="post">
    <fieldset>
        <legend>Alteração de Cidades</legend>
        <br>
        <a href="../index.html"><button type="button">Menu</button></a>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
        </div>
        <div>
        <label for="nome">Estado</label>
                <select name="estado" id="estado">
                    <option value="SP" <?php echo $row ['estado'] == "SP" ? "selected" : ""?>>SP</option>
                    <option value="RJ" <?php echo $row ['estado'] == "RJ" ? "selected" : ""?>>RJ</option>
                    <option value="MG" <?php echo $row ['estado'] == "MG" ? "selected" : ""?>>MG</option>
                    <option value="ES" <?php echo $row ['estado'] == "ES" ? "selected" : ""?>>ES</option>
                    <option value="MT" <?php echo $row ['estado'] == "MT" ? "selected" : ""?>>MT</option>
                    <option value="MS" <?php echo $row ['estado'] == "MS" ? "selected" : ""?>>MS</option>
                    <option value="GO" <?php echo $row ['estado'] == "GO" ? "selected" : ""?>>GO</option>
                </select>
        </div>
        <div>
            <input type="hidden" name="id" value = "<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </fieldset>
</form>
</body>
</html>
<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração cidade</title>

</head>
<body>
    <h1>Alteração de cidade</h1>
    <br>
    <a href="../index.html"><button>Menu</button></a>
    <?php
        $sql = "UPDATE cidade SET
                    nome = '$nome',
                    estado = '$estado'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>
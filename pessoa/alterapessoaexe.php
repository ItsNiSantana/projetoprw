<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $ativo = $_POST['ativo'];
    $cidade = $_POST['cidade'];

    echo "<h1>Dados do cliente</h1>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Endereço: $endereco<br>";
    echo "Bairro: $bairro<br>";
    echo "CEP: $cep<br>";
    $sql = "INSERT INTO cliente
    (nome, email, endereco, bairro, cep, ativo, id_cidade)";
    $sql.= " VALUES('".$nome."','".$email."','".$endereco."','".$bairro."','".$cep."',".$ativo.", ".$cidade.")";
    echo $sql;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera pessoa</title>

</head>
<body>
    <h1>Alteração de pessoa</h1>
    <br>
    <a href="../index.html"><button type="button">Menu</button></a>
    <?php
        echo "<h1>Dados do cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Endereço: $endereco<br>";
        echo "Bairro: $bairro<br>";
        echo "CEP: $cep<br>";

        $sql = "UPDATE pessoa SET
                    nome = '$nome',
                    email = '$email',
                    endereco = '$senha',
                    bairro = '$bairro',
                    cep = '$cep'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>
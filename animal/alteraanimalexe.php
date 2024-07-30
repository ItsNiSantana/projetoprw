<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $dt_nasc = $_POST['dt_nasc'];
    $idade = $_POST['idade'];
    $castrado = $_POST['castrado'];
    $pessoa = $_POST['pessoa'];
    echo "<h1>Dados do animal</h1>";
    echo "Nome: $nome<br>";
    echo "Espécie: $especie<br>";
    echo "Raça: $raca<br>";
    echo "Data de nascimento: $dt_nasc<br>";
    echo "Idade: $idade<br>";
    $sql = "INSERT INTO animal
    (nome, especie, raca, dt_nasc, idade, castrado, id_pessoa)";
    $sql.= " VALUES('".$nome."','".$especie."','".$raca."','".$dt_nasc."','".$idade."',".$castrado.", ".$pessoa.")";
    echo $sql;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera animal</title>

</head>
<body>
    <h1>Alteração de animal</h1>
    <br>
    <a href="../index.html"><button type="button">Menu</button></a>
    <?php
        $sql = "UPDATE pessoa SET
                    nome = '$nome',
                    especie = '$especie',
                    raca = '$raca',
                    dt_nasc = '$dt_nasc',
                    idade = '$idade'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
</body>
</html>
<?php
    include('../includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $dt_nasc = $_POST['dt_nasc'];
    $castrado = $_POST['castrado'] == "sim"? 1: 0;
    $pessoa = $_POST['pessoa'];

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
        $dt_nasc_modif = date('Y-m-d', strtotime($dt_nasc));
        $dt_atual = new DateTime();
        $dt_nasc_temp = new DateTime($dt_nasc_modif);
        $idade_temp = $dt_nasc_temp->diff(new DateTime(date('Y-m-d')));
        $idade = $idade_temp->format('%Y');
        
        echo "<h1>Dados do animal</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data de nascimento: $dt_nasc<br>";
        echo "Idade: $idade<br>";
        echo "Castrado: $castrado<br>";
        echo "ID Pessoa: $pessoa<br>";

        $sql = "UPDATE pessoa SET
                    nome = '$nome',
                    especie = '$especie',
                    raca = '$raca',
                    dt_nasc = '$dt_nasc',
                    castrado = $castrado,
                    id_pessoa =$pessoa
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados\n".mysqli_error($con);
    ?>
</body>
</html>
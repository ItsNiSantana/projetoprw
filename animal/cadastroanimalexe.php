<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Animal</title>
</head>
<body>
    <?php

        include('../includes/conexao.php');

        //upload foto
        $nome_foto = "";
        if(file_exists ($_FILES ['foto']['tmp_name'])){
            $pasta_destino = 'fotos/';
            $extensao = strtolower(substr($_FILES ['foto']['name'], -4));
            $nome_foto = $pasta_destino . date('Ymd-His'). $extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
        }
        //fim upload
    
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raca = $_POST['raca'];
        $dt_nasc = $_POST['dt_nasc'];
        $castrado = intval($_POST['castrado']);
        $pessoa = $_POST['pessoa'];

        echo "<h1>Dados do animal</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $especie<br>";
        echo "Raça: $raca<br>";
        echo "Data de nascimento: $dt_nasc<br>";
        echo "Castrado: " . ($castrado ? "Sim" : "Não") . "</br>";
        $dt_nasc_modif = date('Y-m-d', strtotime($dt_nasc));

        $castrado = $castrado ? 0 : 1;
        $sql = "INSERT INTO animal (nome, especie, raca, dt_nasc, castrado, id_pessoa, foto)";
        $sql .= " VALUES('$nome', '$especie', '$raca', '$dt_nasc_modif', $castrado, $pessoa, '$nome_foto')";

        echo $sql;

        //executa comando no banco de dados
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!<h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar!<h2>";
            echo mysqli_error($con);
        }
    ?>

</body>
</html>
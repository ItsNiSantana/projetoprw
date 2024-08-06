<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de animais</title>

</head>
<body>
    
    <?php
        include('../includes/conexao.php');

        $sql = "SELECT a.id, a.nome nomeanimal, a.especie, a.raca, a.dt_nasc, a.idade, a.castrado, p.nome nomepessoa, p.email, p.endereco, p.bairro, p.cep, p.ativo
                FROM animal.a
                LEFT JOIN pessoa p on p.id = a.id";

        //executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de animal</h1>
    <br>
    <a href="../index.html"><button type="button">Menu</button></a>
    <a href="cadastroanimal.php"><button type="button">Cadastrar novo animal</button></a>
    <table align="center" border="1" width="50%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Especie</th>
            <th>Raça</th>
            <th>Data de nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Alterar</th>
            <th>Excluir</th>

        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["especie"]."</td>";
                echo "<td>".$row["raca"]."</td>";
                echo "<td>".$row["dt_nasc"]."</td>";
                echo //fazer comando para calcular idade
                echo "<td>".$row["castrado"]."</td>";
                echo "<td><a href='alteraanimal.php?id=". $row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaanimal.php?id=". $row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
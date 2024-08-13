<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pessoas</title>

</head>
<body>
    
    <?php
        include('../includes/conexao.php');

        $sql = "SELECT p.id, p.nome nomepessoa, p.email, p.endereco, p.bairro, p.cep, cid.nome nomecidade, cid.estado
                FROM pessoa p
                LEFT JOIN cidade cid on cid.id = p.id_cidade";

        //executa a consulta
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de pessoa</h1>
    <br>
    <a href="../index.html"><button type="button">Menu</button></a>
    <a href="cadastropessoa.php"><button type="button">Cadastrar nova pessoa</button></a>
    <table align="center" border="1" width="50%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Alterar</th>
            <th>Excluir</th>

        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nome"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["endereco"]."</td>";
                echo "<td>".$row["bairro"]."</td>";
                echo "<td>".$row["cep"]."</td>";
                echo "<td><a href='alterapessoa.php?id=". $row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletapessoa.php?id=". $row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
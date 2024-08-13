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

    ?>
    <h1>Consulta de animal</h1>
    <br>
    <a href="../index.html"><button type="button">Menu</button></a>
    <a href="cadastroanimal.php"><button type="button">Cadastrar novo animal</button></a>
    <table align="center" border="1" width="50%">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Dono(a)</th>
            <th>Alterar</th>
            <th>Excluir</th>

        </tr>
        <?php
            include('../includes/conexao.php');

            $sql = "SELECT FLOOR(datediff(curdate(), dt_nasc) / 365) as idade, a.id, a.nome nomeanimal, a.especie, a.raca, a.dt_nasc, a.castrado, d.nome nomedono, d.email
                    FROM animal a
                    LEFT JOIN pessoa d on d.id = a.id_pessoa";
        
            //executa a consulta
            $result = mysqli_query($con, $sql);

            while($row = mysqli_fetch_array($result)){
                $castrado = $row['castrado'] == 1 ? "Sim" : "Não";

                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                if($row['foto'] == ""){
                    echo "<td></td>";
                }
                else{
                    echo "<td><img src='./" . $row['foto']."' width='80' height = '100'/></td>";
                }
                echo "<td>".$row['nomeanimal']."</td>";
                echo "<td>".$row['especie']."</td>";
                echo "<td>".$row['raca']."</td>";
                echo "<td>".$row['dt_nasc']."</td>";
                echo "<td>" .$row['idade']. " anos </td>";
                echo "<td>".$castrado."</td>";
                echo "<td>".$row['nomedono']. "/" . $row["email"]."</td>";
                echo "<td><a href='alteraanimal.php?id=". $row['id']."'>Alterar</a></td>";
                echo "<td><a href='deletaanimal.php?id=". $row['id']."'>Deletar</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
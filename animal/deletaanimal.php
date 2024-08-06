<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/deletar.css" />
    <title>Deletar animal</title>
</head>

<body>
        <div>
            <h1>Deletar cidade</h1>
            <?php
            include('../includes/conexao.php');
            $id = $_GET['id'];
            $sql = "DELETE FROM animal WHERE id = $id";
            $result = mysqli_query($con, $sql);
            if ($result)
                echo "<h2>Dados deletados!</h2>";
            else {
                echo "<h2>Erro ao deletar</h2>";
                echo "<h2>" . mysqli_error($con) . "</h2>";
            }
            ?>
        </div>
</body>

</html>
<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "teste_17";

$conexao = new mysqli($host , $usuario , $password , $bd);

$sql = "SELECT * FROM users";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Usuários</h2>

<table>
    <tr>
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
        <th>senha</th>

    </tr>
    <?php
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["telefone"] . "</td>";
            echo "<td>" . $row["senha"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conexao->close();
?>
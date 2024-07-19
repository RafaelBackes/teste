<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <div class="container">
        <h2>Bem vindo ao cadastro</h2>
        <h4>preencha os campos abaixo : </h4>
    </div>

    <form action="" method="$_POST">
    <div class="cadastro">
            <div class="dados">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br><br>
        </div>
        <div class="email">
            <div class="">
            <label for="email">email:</label>
            <input type="text" id="email" name="email" required>
            <br><br>
        </div>
        <div class="telefone">
            <div class="">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>
            <br><br>
        </div>
        <div class="senha">
            <div class="">
            <label for="senha">Senha:</label>
            <input type="text" id="senha" name="senha" required>
            <br><br>
        </div>

        <div class="botoes">
            <button type="submit" name="cadastrar">Cadastrar</button>
            
            <a href="/exercicio_17/listagem.php" class="button">Listar</a>
        </div>
    </form>
</body>
</html>

<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "teste_17";

$conexao = new mysqli($host , $usuario , $password , $bd);

if ($conexao->connect_error) {
    die("Erro ao conectar" . $conexao->connect_error);
}else{
    echo"Conexão realizada com sucesso";
}

echo "<BR>  <BR>";
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if (isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO users (nome , email , telefone , senha  ) VALUES ('$nome' , '$email' , '$telefone' , '$senha')";

        if ($conexao ->query($sql) === TRUE) {
            echo "Usuário Cadastardo com sucesso ";
        }else{
            echo "Erro ao cadastrar Usuário :" . $conexao -> error;
        }
    }

    if (isset($_POST['Listar'])) {
       header('lisatgem.php');
       
    }
}
?>
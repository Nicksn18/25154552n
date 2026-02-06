<?php
session_start();
if(!isset($_SESSION['usuario'])){ header("Location: login.php"); exit(); }
include("db.php");
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $despachante = $_POST['despachante'];
    $sql = "INSERT INTO empresas (nome, cnpj, telefone, email, despachante) VALUES ('$nome','$cnpj','$telefone','$email','$despachante')";
    $conn->query($sql);
    $msg = "Empresa cadastrada com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro da Empresa</title>
<link rel="stylesheet" href="css/style.css">
<style>
/* Navbar */

    body {
        margin:0;
        background:url(plano-de-fundo.png)
    }

nav {
    background-color: #b71c1c;
    padding: 15px 0;
    text-align: center;
}

/* Links da navbar */
nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
    font-size: 16px;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

/* Hover e active dos links */
nav a:hover {
    background-color: white;
    color: #b71c1c;
    border: 2px solid #b71c1c;
}

nav a:active {
    background-color: #d32f2f;
    color: white;
}

/* Container centralizado */
.container{
    max-width: 800px;
    margin: 50px auto;
    background: rgba(000, 000, 000, 0.3);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    color:white;
}

/* Form grid */
form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* Inputs e botão */
input, button {
    padding: 15px;
    font-size: 16px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* Inputs ocupam coluna inteira */
input {
    width: 100%;
    box-sizing: border-box;
}

/* Botão de submit centralizado */
button {
    grid-column: 1 / -1; /* ocupa as duas colunas */
    background-color: #b71c1c;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

/* Hover e active do botão */
button:hover {
    background-color: white;
    color: #b71c1c;
    border: 2px solid #b71c1c;
}

button:active {
    background-color: #d32f2f;
    color: white;
    border: none;
}

/* Mensagem de sucesso centralizada */
p {
    text-align: center;
    font-weight: bold;

}
</style>
</head>
<body>
<!-- Navbar -->
<nav>
    <a href="index.php">Início</a>
    <a href="empresa.php">Cadastro da Empresa</a>
    <a href="extintor.php">Cadastro de Extintores</a>
    <a href="lista_empresas.php">Lista de Empresas</a>
    <a href="logout.php">Sair</a>
</nav>

<div class="container">
<h2 style="text-align:center;">Cadastro da Empresa</h2>
<?php if(isset($msg)) echo "<p style='color:green'>$msg</p>"; ?>
<form method="POST">
<input type="text" name="nome" placeholder="Nome da Empresa" required>
<input type="text" name="cnpj" placeholder="CNPJ" required>
<input type="tel" name="telefone" placeholder="Telefone">
<input type="email" name="email" placeholder="E-mail">
<input type="text" name="despachante" placeholder="Nome do Despachante">
<button type="submit" name="cadastrar">Cadastrar Empresa</button>
</form>
</div>
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['usuario'])){ header("Location: login.php"); exit(); }
include("db.php");
if(isset($_POST['cadastrar'])){
    $codigo = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $capacidade = $_POST['capacidade'];
    $fabricante = $_POST['fabricante'];
    $localizacao = $_POST['localizacao'];
    $validade = $_POST['validade'];
    $ultima_inspecao = $_POST['ultima_inspecao'];
    $condicao = $_POST['condicao'];
    $obs = $_POST['obs'];
    $sql = "INSERT INTO extintores (codigo, tipo, capacidade, fabricante, localizacao, validade, ultima_inspecao, condicao, observacoes)
            VALUES ('$codigo','$tipo','$capacidade','$fabricante','$localizacao','$validade','$ultima_inspecao','$condicao','$obs')";
    $conn->query($sql);
    $msg = "Extintor cadastrado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro de Extintores</title>
<link rel="stylesheet" href="css/style.css">
<style>
/* Navbar */
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
    max-width: 900px;
    margin: 50px auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

/* Form grid */
form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* Inputs e botão */
input, select, textarea, button {
    padding: 15px;
    font-size: 16px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* Inputs e selects ocupam coluna inteira */
input, select {
    width: 100%;
    box-sizing: border-box;
}

/* Textarea ocupa as duas colunas */
textarea {
    grid-column: 1 / -1;
    width: 100%;
    height: 80px;
    resize: vertical;
}

/* Botão de submit centralizado */
button {
    grid-column: 1 / -1;
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
<h2 style="text-align:center;">Cadastro de Extintores</h2>
<?php if(isset($msg)) echo "<p style='color:green'>$msg</p>"; ?>
<form method="POST">
<input type="text" name="codigo" placeholder="Código do Extintor" required>
<select name="tipo" required>
    <option value="">Selecione o tipo</option>
    <option>Água (AP)</option>
    <option>Pó Químico (PQD)</option>
    <option>CO₂</option>
    <option>Espuma Mecânica</option>
</select>
<input type="text" name="capacidade" placeholder="Capacidade">
<input type="text" name="fabricante" placeholder="Fabricante">
<input type="text" name="localizacao" placeholder="Localização">
<input type="date" name="validade" placeholder="Data de Validade">
<input type="date" name="ultima_inspecao" placeholder="Última Inspeção">
<select name="condicao" required>
    <option value="">Condição</option>
    <option>OK</option>
    <option>Necessita Recarga</option>
    <option>Danificado</option>
    <option>Fora de Validade</option>
</select>
<textarea name="obs" placeholder="Observações"></textarea>
<button type="submit" name="cadastrar">Cadastrar Extintor</button>
</form>
</div>
</body>
</html>

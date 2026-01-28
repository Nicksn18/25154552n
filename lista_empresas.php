<?php 
session_start();
if(!isset($_SESSION['usuario'])){ header("Location: login.php"); exit(); }
include("db.php");
$result = $conn->query("SELECT * FROM empresas");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Empresas</title>
<link rel="stylesheet" href="css/style.css">
<style>
/* Navbar */
nav {
    background-color: #b71c1c;
    padding: 15px 0;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

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
.container {
    max-width: 1200px;
    margin: 50px auto;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    text-align: center;
}

/* Título */
.container h2 {
    font-size: 32px;
    margin-bottom: 25px;
}

/* Tabela estilizada */
table {
    border-collapse: separate; /* permite espaçamento entre linhas */
    border-spacing: 0 10px;    /* espaço vertical entre linhas */
    margin: 0 auto 20px auto;  /* centraliza horizontalmente */
    width: 90%;                /* largura da tabela */
}

th, td {
    padding: 8px 12px; /* espaçamento interno */
    border: 1px solid #ccc;
    text-align: center;
    font-size: 14px; /* mantém o tamanho padrão */
}

th {
    background-color: #b71c1c;
    color: white;
}

/* Linhas alternadas */
tr:nth-child(even) td {
    background-color: #f5f5f5;
}

/* Botões (se houver) */
button {
    background-color: #b71c1c;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 10px 0;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

button:hover {
    background-color: white;
    color: #b71c1c;
    border: 2px solid #b71c1c;
}

button:active {
    background-color: #d32f2f;
    color: white;
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
<h2>Lista de Empresas</h2>
<table>
<tr>
<th>ID</th>
<th>Nome</th>
<th>CNPJ</th>
<th>Telefone</th>
<th>E-mail</th>
<th>Despachante</th>
</tr>
<?php while($row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nome']; ?></td>
<td><?php echo $row['cnpj']; ?></td>
<td><?php echo $row['telefone']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['despachante']; ?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>

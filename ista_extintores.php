<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
include("db.php");

// Certifique-se que a tabela 'extintores' existe no banco
$result = $conn->query("SELECT * FROM extintores");
if(!$result){
    die("Erro ao buscar extintores: ".$conn->error);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Extintores</title>
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
    border-collapse: separate;
    border-spacing: 0 10px;
    margin: 0 auto 20px auto;
    width: 95%;
}

th, td {
    padding: 8px 12px;
    border: 1px solid #ccc;
    text-align: center;
    font-size: 14px;
}

th {
    background-color: #b71c1c;
    color: white;
}

/* Linhas alternadas */
tr:nth-child(even) td {
    background-color: #f5f5f5;
}
</style>
</head>
<body>
<nav>
    <a href="index.php">Início</a>
    <a href="empresa.php">Cadastro da Empresa</a>
    <a href="extintor.php">Cadastro de Extintores</a>
    <a href="lista_empresas.php">Lista de Empresas</a>
    <a href="logout.php">Sair</a>
</nav>

<div class="container">
<h2>Lista de Extintores</h2>
<table>
<tr>
<th>ID</th>
<th>Código</th>
<th>Tipo</th>
<th>Capacidade</th>
<th>Fabricante</th>
<th>Localização</th>
<th>Validade</th>
<th>Última Inspeção</th>
<th>Condição</th>
<th>Observações</th>
</tr>
<?php while($row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['codigo']; ?></td>
<td><?php echo $row['tipo']; ?></td>
<td><?php echo $row['capacidade']; ?></td>
<td><?php echo $row['fabricante']; ?></td>
<td><?php echo $row['localizacao']; ?></td>
<td><?php echo $row['validade']; ?></td>
<td><?php echo $row['ultima_inspecao']; ?></td>
<td><?php echo $row['condicao']; ?></td>
<td><?php echo $row['observacoes']; ?></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>

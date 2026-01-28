<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Página Inicial</title>
<link rel="stylesheet" href="css/style.css">
<style>

.tabela-extintores {
    display: grid;
    grid-template-columns: repeat(5,1fr);
    gap: 20px;
    max-width: 1200px;
    margin: auto;
}

.coluna {
    background: #f4fbff;
    border-radius: 18px;
    padding: 10px;
    text-align: center;
}

/* Cabeça vermelha */
.cabeca {
    background: #c62828;
    color: #fff;
    padding: 8px 14px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 15px;
}

/* Ícone */
.icone {
    font-size: 50px;
    margin-bottom: 15px;
}

/* Classes */
.classes {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-bottom: 15px;
}

.classe {
    width: 32px;
    height: 32px;
    line-height: 32px;
    font-weight: bold;
    color: #fff;
    border-radius: 6px;
}

.classe.a { background: #2e7d32; }
.classe.b { background: #c62828; }
.classe.c { background: #1565c0; }

/* Lista */
ul {
    list-style: none;
    padding: 0;
    font-size: 14px;
}

ul li {
    margin-bottom: 6px;
}


body {
    margin:0;
}

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
    font-size: 18px;
    padding: 10px 20px;
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
.container {
    max-width: 800px;
    margin: 50px auto;
    background: white;
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Título maior */
.container h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

/* Texto explicativo */
.container p {
    font-size: 20px;
    line-height: 1.6;
}

#tabelas h1, h2 {
    text-align:center;
    font-size:2em;
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

<!-- Conteúdo centralizado -->
<div class="container">
<h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
<p>Use o menu acima para acessar os cadastros e listas do sistema de extintores.</p>
</div>

    <div id="tabelas">
        <h1>Tabelas de Tipos de Recargas e Agentes Extintores</h1>

        <h2>Tipos de Extintores</h2>
    </div>

    <div class="tabela-extintores">

  <div class="coluna">
    <div class="cabeca">Água pressurizada</div>

    <div class="icone">🧯</div>

    <div class="classes">
      <span class="classe a">A</span>
      <span class="classe c">C</span>
    </div>

    <ul>
      <li>Hospitais</li>
      <li>Museus</li>
      <li>Escritórios</li>
    </ul>
  </div>

  <div class="coluna">
    <div class="cabeca">Espuma química</div>

    <div class="icone">🧯</div>

    <div class="classes">
      <span class="classe a">A</span>
      <span class="classe b">B</span>
    </div>

    <ul>
      <li>Depósito de combustíveis</li>
      <li>Depósito de tintas</li>
      <li>Tanques de imersão</li>
    </ul>
  </div>

  <div class="coluna">
    <div class="cabeca">CO₂</div>

    <div class="icone">🧯</div>

    <div class="classes">
      <span class="classe b">B</span>
      <span class="classe c">C</span>
    </div>

    <ul>
      <li>Oficinas mecânicas</li>
      <li>Indústria</li>
    </ul>
  </div>

</div>


</body>
</html>

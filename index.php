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
    grid-template-columns: repeat(4,1fr);
    gap: 20px;
    max-width: 1200px;
    margin: auto;
    
}

.coluna {
    background: #f4fbff;
    border-radius: 18px;
    padding: 10px;
    text-align: center;
    background: rgba(255, 255, 255, 0.3);
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


#servicos {
    padding-top:80px;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 30px;
    max-width: 1200px;
    margin: auto;
}

.icons img {
    width: 80px;
    padding-bottom:15px;
    
}

.produtos {
    background: #f4fbff;
    border-radius: 18px;
    padding: 10px;
    text-align: center;

}



.produto {
    background: #c62828;
    color: #fff;
    padding: 8px 14px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 15px;
}

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
    background:url(plano-de-fundo.png) ;

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
    background: rgba(255, 255, 255, 0.2);
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

#textinho p {
    text-align:center;
    font-size:1.5em;
    color:white;
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


  <div class="coluna">
    <div class="cabeca">Espuma Mecânicas</div>

    <div class="icone">🧯</div>

    <div class="classes">
      <span class="classe a">A</span>
      <span class="classe b">B</span>
    </div>

    <ul>
      <li>Indústrias e Fábricas</li>
      <li>Postos de Combustível e Garagens</li>
      <li>Áreas de Armazenamento de Produtos Químicos</li>
    </ul>
  </div>

</div>

    <div id="textinho">
        <p>Desde 2000 a ExtinTrack atua no ramo de comércio, representação e serviços de equipamentos contra incêndio. São eles: extintores de combate a incêndio e demais sistemas necessários à prevenção e segurança contra incêndio.</p>

    <p>Temos como nosso principal valor as pessoas, onde acreditamos que:</p>


<p>"Uma equipe é mais do que um grupo de pessoas. É a soma de muitas energias. Mais que a divisão de tarefas, é a união em torno de um objetivo. A parceria cria a confiança. A habilidade cria o respeito e o sincronismo de todos e produz resultados notáveis. Eis a fórmula do sucesso."</p>

    </div>

<div id="servicos">

    <div class="produtos">

        <div class="icons"><img src="extintor-de-incendio.png" alt=""></div>

        <div class="produto">Produtos

        </div>

    </div>


    <div class="produtos">

        <div class="icons"><img src="chave-inglesa (1).png" alt=""></div>

        <div class="produto">Serviços

        </div>

    </div>


    <div class="produtos">

        <div class="icons"><img src="dinheiro.png" alt=""></div>

        <div class="produto">Orçamento

        </div>

    </div>

</div>


</body>
</html>

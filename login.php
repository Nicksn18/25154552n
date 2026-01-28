<?php
session_start();
include("db.php");
if(isset($_POST['login'])){
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body {
    background:url(plano.png);
    background-repeat:no-repeat x;
    background-size:cover;
    width: 100%;
    margin:0;

}

/* Navbar vermelha e branca */
nav {
    background-color: #b71c1c; /* vermelho escuro */
    color: white;
    padding: 5px;
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1px;                                             
    background-position:bottom;
    background:url(chamas.png);
    

}

/* Container do login */
.container{
    max-width: 400px;
    margin: 50px auto;
    background: rgba(255, 255, 255, 0.2);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.1);

    
}

/* Inputs e botão */
input, button{
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}
button{
    background-color: #b71c1c;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
}
button:hover{
    background-color: #d32f2f;
}

.extintack {
    font-size: 1.5em;
}

.sistema {
    text-align: center;
    font-size: 1.7em;
}

</style>
</head>
<body>

<!-- Navbar -->
<nav>
    Sistema de Controle de Extintores<br>
        <Span class="extintack">ExtinTrack</span>
</nav>

<div class="container">

   

        <h2 class="sistema">Acesso ao Sistema</h2>

    <?php if(isset($erro)) echo "<div class='erro'>$erro</div>"; ?>

    <form method="POST">
        <div class="input-group">
            <i class="fa-regular fa-user fa-bounce fa-2"></i>
            <input type="text" name="usuario" placeholder="Usuário" required>
        </div>

        <div class="input-group">
            <i class="fa-solid fa-lock fa-2"></i>
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <button type="submit" name="login">
            <i class="fa fa-sign-in-alt"></i> Entrar
        </button>
    </form>

</div>


</body>
</html>


<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $pass = 123;

    if($senha === $pass){
        echo "Log in efetuado com sucesso.";
        echo $nome."<br>";
        echo $email."<br>";
        echo $senha."<br>";
    }
    else {
        echo "Email ou senha incorretos.";
        echo '<a href="entrada.html">Voltar</a>';
    }    
?>
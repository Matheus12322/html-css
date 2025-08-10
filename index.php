<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-title">
            Formulário Exemplo
        </div>  
        <div class="form-content">
            <form action="createUser.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="digite seu nome" required >
            <br>
                <label for="idade">idade:</label>
                <input type="number" name="idade" placeholder="sua idade"required>
            <br> 
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="digite seu email" required>
            <br> 
                <label for="Telefone">Telefone:</label>
                <input type="tel" name="Telefone" placeholder="(99)9999-9999">
                <br>
                <label for="cidade">nome da cidade:</label>
                <select name="nome da cidade:" >
                    <option value="Rio de Janeiro">rio de Janeiro</option>
                    <option value="Minas Gerais">minas Gerais</option>
                    <option value="Sao paulo">sao paulo</option>
                    <option value="Baiha">Baiha</option>
                </select>
            <hr> 
                <label for="sexo">Sexo:</label>
                <input type="radio"name="sexo" value="Masculino">Masculino
                <input type="radio" name="sexo" value="feminino">feminino
                <input type="radio"name="sexo" value="outros">outros
            <hr>
                <label for="nome">Nome da Mae:</label>
                <input type="text" name="nome da Mae" placeholder="digite nome da Mae">
                <label for="nome">Nome do pai:</label>
                <input type="text" name="nome do pai"placeholder="digite nome do pai">
            <hr>

            <div class="gostos">
                Gostos
            </div>     

            <label for="Gostos">Esporte:</label>
            <input type="checkbox" name="Gostos"value="Esporte">Esporte
            <input type="checkbox" name="Gostos"value="musica">musica
            <input type="checkbox" name="Gostos"value="arte">arte
            <input type="checkbox" name="Gostos"value="natação">natação
            <input type="checkbox" name="Gostos"value="corrida">corrida
            <input type="checkbox" name="Gostos"value="leitura">leitura
            <input type="checkbox" name="Gostos"value="tecnoligia">tecnoligia
            <input type="checkbox" name="Gostos"value="viajar">viajar
            <input type="checkbox" name="Gostos"value="escrever">escrever
            <input type="checkbox" name="Gostos"value="estudar">estudar     

            <br>
                <label for="cor"></label>Cor preferida:
                <select name="cor" >
                    <option value="vermelho">vermelho</option>
                    <option value="azul">azul</option>
                    <option value="verde">verde</option>
                    <option value="amarelo">amarelo</option>
                </select>
                <hr>
                <label for="sugestao">Ideais:</label>
                    <textarea name="sugestao" cols="30" rows="4" placeholder="ideias"></textarea>
            <hr>
            <input type="submit" name="enviar" value="enviar">
            <input type="reset" name="limpar" value="limpar" >
            </form>
        </div>
    </div> 
   
</body>
</html>
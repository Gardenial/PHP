<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form method="POST">
        <label>Escolha o campo que deseja atualizar: </label><br>
        <select name="opcao">
            <option value="0"></option>
            <option value="1">Nome</option>
            <option value="2">Telefone</option>
            <option value="3">Endereço</option>
            <option value="4">Cidade</option>
        </select><br><br>

        <label for="dado">Atualizar: </label>
        <input type="text" name="dado" id="dado">
        <button type="submit" name="atualizar">Atualizar</button>
    </form>
    
    <?php
        include 'cadastro.php';
        $_COOKIE
        //como passar os mesmos dados de um objeto para outra sessão
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Entrar</h2>
        <form action="index.php" method="get">
            <label for="username">Usuário</label>
            <br>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Senha</label>
            <br>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Entrar</button>
            <?php
                if (isset($_GET['username'])) {
                    $username=htmlspecialchars($_GET['username']);
                    echo '<h1>Resultado</h1>';
                    echo'<h2>Olá, '.$username. '. Seja bem-vindo!</h2>';
                    echo '<h2>Vamos detonar com o php.</h2>';
                }
            ?>
        </form>
    </div>
</body>
</html>
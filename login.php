<?phph
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>IEPC - Bom Sucesso</title>
    </head>
    <body>
        <h2>Área Restrita</h2>
        <form action="valida.php" method="POST">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" placeholder="digite seu usuário...">
            <br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="digite sua senha...">
            <br>
            <input type="submit" name="btnLogin" value="Acessar">
        </form>
    </body>
</html>


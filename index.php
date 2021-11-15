<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Reclamação</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Página de Reclamação</h1>
    <div class="corpo">
        <form action="">
            <label for="nome">
                Nome completo:<br>
                <input type="text" id="nome" name="nome"><br>
            </label>

            <label for="email">
                Email:<br>
                <input type="text" id="email" name="email"><br>
            </label>

            <label for="reclamação">
                Escreva sua reclamação abaixo:<br>
                <textarea name="reclamação" rows="5" cols="50"></textarea>
            </label><br>
            <input type="submit" value="ENVIAR" id="botão">
        </form>
    </div>
</body>
</html>

<!-- views/item/criar.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Novo Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, select {
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Novo Item</h1>
        <form action="index.php?action=salvar_item" method="post">
            <label for="nome">Nome do Item:</label>
            <input type="text" id="produto" name="produto" required>
            
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>

            <label for="preco">Preço:</label>
            <input type="number" step="0.01" id="preco" name="preco" required>
            
            <input type="submit" value="enviar">
        </form>
    </div>
</body>
</html>

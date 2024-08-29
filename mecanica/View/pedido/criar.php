<!-- views/pedido/criar.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Novo Pedido</title>
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
        <h1>Criar Novo Pedido</h1>
        <form action="index.php?action=registrar_pedido" method="post">
            <label for="cliente">Cliente:</label>
            <select id="cliente" name="cliente_id" required>
                <!-- Exemplo: Preencha com opções dinâmicas dos clientes -->
                <?php
                foreach ($clientes as $cliente) {
                    echo "<option value='{$cliente['id']}'>{$cliente['nome']}</option>";
                }
                ?>
            </select>
            
            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>
            
            <button type="submit">Cadastrar Pedido</button>
        </form>
    </div>
</body>
</html>

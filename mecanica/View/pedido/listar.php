<!-- views/pedido/listar.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar Pedidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listagem de Pedidos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Nome do Cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Suponha que $pedidos é um array de pedidos passado pelo controlador
                foreach ($pedidos as $pedido) {
                    echo "<tr>";
                    echo "<td>{$pedido['id']}</td>";
                    echo "<td>{$pedido['data']}</td>";
                    echo "<td>{$pedido['nome_cliente']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

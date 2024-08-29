<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Pedidos</title>
</head>
<body>
    <h1>Pedidos Realizados</h1>
    <table border="1">
        <tr>
            <th>ID do Pedido</th>
            <th>Cliente</th>
            <th>Data do Pedido</th>
        </tr>
        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= htmlspecialchars($pedido['id']) ?></td>
                <td><?= htmlspecialchars($pedido['nome']) ?></td>
                <td><?= htmlspecialchars($pedido['data_pedido']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

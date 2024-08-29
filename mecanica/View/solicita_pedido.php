<!DOCTYPE html>
<html>
<head>
    <title>Solicitar Pedido</title>
</head>
<body>
    <h1>Solicitar Pedido</h1>
    <form method="POST" action="solicita_pedido.php">
        <label>Cliente:</label>
        <select name="cliente_id">
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?= htmlspecialchars($cliente['id']) ?>"><?= htmlspecialchars($cliente['nome']) ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Registrar Pedido">
    </form>
</body>
</html>

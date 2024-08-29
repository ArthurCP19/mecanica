<!DOCTYPE html>
<html>
<head>
    <title>Registrar Itens</title>
</head>
<body>
    <h1>Registrar Itens no Pedido</h1>
    <form method="POST" action="registra_itens.php">
        <label>Pedido ID:</label>
        <select name="pedido_id">
            <?php foreach ($pedidos as $pedido): ?>
                <option value="<?= htmlspecialchars($pedido['id']) ?>"><?= htmlspecialchars($pedido['id']) ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label>Produto:</label>
        <input type="text" name="produto" required>
        <br><br>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br><br>
        <input type="submit" value="Registrar Item">
    </form>
</body>
</html>

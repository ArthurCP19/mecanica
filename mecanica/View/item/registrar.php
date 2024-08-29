<!-- views/item/registrar.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Item</title>
</head>
<body>
    <h1>Registrar Novo Item</h1>
    <form action="index.php?action=salvar_item" method="post">
        <label for="pedido_id">Pedido ID:</label>
        <input type="number" id="pedido_id" name="pedido_id" required><br><br>
        
        <label for="produto">Produto:</label>
        <input type="text" id="produto" name="produto" required><br><br>
        
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>
        
        <input type="submit" value="Registrar Item">
    </form>
</body>
</html>


<?php
require_once 'Model/Item.php';
require_once 'Model/Pedido.php';

class ItemController {
    private $itemModel;
    private $pedidoModel;
    private $pdo;

    public function __construct($pdo) {
        $this->itemModel = new Item($pdo);
        $this->pedidoModel = new Pedido($pdo);
        $this-> pdo = $pdo ;
    }

    public function listar() {
        $itens = $this->itemModel->listar();
        require 'View/item/listar.php';
    }

    public function criar() {
       
        $pedidos = $this->pedidoModel->listar();
        require 'View/item/criar.php';
    }
    public function salvar_item() {
        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];

        $stmt = $this->pdo->prepare("INSERT INTO itens_do_pedido (produto, quantidade)  VALUES (:produto, :quantidade)");
        $stmt->bindParam(':produto', $produto);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->execute();

        header("Location: index.php?action=listar_item");
    }

}

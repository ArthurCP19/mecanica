<?php
require_once 'Model/Item.php';
require_once 'Model/Pedido.php';

class ItemController {
    private $itemModel;
    private $pedidoModel;

    public function __construct($pdo) {
        $this->itemModel = new Item($pdo);
        $this->pedidoModel = new Pedido($pdo);
    }

    public function listar() {
        $itens = $this->itemModel->listar();
        require 'View/item/listar.php';
    }

    public function criar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pedido_id = $_POST['pedido_id'];
            $produto = $_POST['produto'];
            $quantidade = $_POST['quantidade'];
            $this->itemModel->criar($pedido_id, $produto, $quantidade);
            header('Location: /mecanica/public/index.php');
        }
        $pedidos = $this->pedidoModel->listar();
        require 'View/item/criar.php';
    }
}

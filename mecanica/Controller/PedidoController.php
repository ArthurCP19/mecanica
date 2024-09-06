<?php
require_once 'Model/Pedido.php';
require_once 'Model/Cliente.php';

class PedidoController {
    private $pedidoModel;
    private $clienteModel;

    public function __construct($pdo) {
        $this->pedidoModel = new Pedido($pdo);
        $this->clienteModel = new Cliente($pdo);
    }

    public function listar() {
        $pedidos = $this->pedidoModel->listar();
        require 'View/pedido/listar.php';
    }

    public function criar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cliente_id = $_POST['cliente_id'];
            $this->pedidoModel->criar($cliente_id);
            header('Location: /mecanica-1/mecanica/index.php');
        }
        $clientes = $this->clienteModel->listar();
        require 'View/pedido/criar.php';
    }
}

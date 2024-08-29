<?php
require_once 'Model/Cliente.php';

    class ClienteController {
        private $pdo;
    
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

    public function listar() {
        $stmt = $this->pdo->prepare("SELECT * FROM cliente");
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require 'View/cliente/listar.php';
    }
    public function criar() {
        require 'View/cliente/registrar.php';
    }

    public function salvar() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $stmt = $this->pdo->prepare("INSERT INTO cliente (nome, email, telefone) VALUES (:nome, :email, :telefone)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();

        header("Location: index.php?action=listar_clientes");
    }
}

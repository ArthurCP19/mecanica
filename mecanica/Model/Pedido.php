<?php
class Pedido {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        $stmt = $this->pdo->prepare("SELECT pedido.id, cliente.nome, pedido.data_pedido 
                                     FROM pedido
                                     JOIN cliente ON pedido.cliente_id = cliente.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($cliente_id) {
        $stmt = $this->pdo->prepare("INSERT INTO pedido (cliente_id, data_pedido) VALUES (:cliente_id, NOW())");
        $stmt->bindParam(':cliente_id', $cliente_id);
        $stmt->execute();
    }
}

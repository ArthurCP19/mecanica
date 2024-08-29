<?php
class Item {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        $stmt = $this->pdo->prepare("SELECT * FROM itens_do_pedido");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($pedido_id, $produto, $quantidade) {
        $stmt = $this->pdo->prepare("INSERT INTO itens_do_pedido (pedido_id, produto, quantidade) 
                                     VALUES (:pedido_id, :produto, :quantidade)");
        $stmt->bindParam(':pedido_id', $pedido_id);
        $stmt->bindParam(':produto', $produto);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->execute();
    }
}

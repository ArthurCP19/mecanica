<?php
require_once 'conecta.php';
require_once 'Controller/PedidoController.php';
require_once 'Controller/ClienteController.php';
require_once 'Controller/ItemController.php';



$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'listar_pedidos':
        $pedidoController = new PedidoController($pdo);
        $pedidoController->listar();
        break;

    case 'solicitar_pedido':
        $pedidoController = new PedidoController($pdo);
        $pedidoController->criar();
        break;

    case 'listar_clientes':
        $clienteController = new ClienteController($pdo);
        $clienteController->listar();
        break;

        case 'criar_cliente':
            $clienteController = new ClienteController($pdo);
            $clienteController->criar();
            break;
    
        case 'salvar_cliente':
            $clienteController = new ClienteController($pdo);
            $clienteController->salvar();
            break;

    case 'registrar_itens':
        $itemController = new ItemController($pdo);
        $itemController->criar();
        break;

    case 'listar_itens':
        $itemController = new ItemController($pdo);
        $itemController->listar();
        break;

        case 'salvar_item':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $itemController = new ItemController($pdo);
                $itemController->salvar();
            } else {
                echo "Método de solicitação inválido.";
            }
            break;    

    default:
        echo "<h1>Sistema de Gestão de Pedidos</h1>";
        echo "<ul>
                <li><a href='index.php?action=listar_pedidos'>Listar Pedidos</a></li>
                <li><a href='index.php?action=solicitar_pedido'>Solicitar Pedido</a></li>
                <li><a href='index.php?action=listar_clientes'>Listar Clientes</a></li>
                <li><a href='index.php?action=criar_cliente'>Registrar Cliente</a></li>
                <li><a href='index.php?action=registrar_itens'>Registrar Itens</a></li>
                <li><a href='index.php?action=listar_itens'>Listar Itens</a></li>
              </ul>";
        break;
}



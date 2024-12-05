<?php

require_once "controller.php";

$controller = new Controller();  // Cria o objeto da classe Controller
$controller->show_products();  // Chama o método db_select

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= htmlspecialchars($produto['nomeProduto']) ?></td>
                    <td><?= htmlspecialchars($produto['valorProduto']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>


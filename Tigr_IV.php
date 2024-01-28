<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrozenClouth</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        button {
            padding: 10px;
            cursor: pointer;
        }
    </style>

</head>
<body>

<?php
function recalculatePrice($selectedProduct, $requestedQuantity) {
    // Проверяем, что товар найден и количество больше 0
    if ($selectedProduct && $requestedQuantity > 0) {
        // Определение максимального доступного количества на складе
        $maxAvailableQuantity = min($selectedProduct['in_stock'], $requestedQuantity);

        // Пересчет цены
        $newPrice = $maxAvailableQuantity * $selectedProduct['price'];

        return [
            'quantity' => $maxAvailableQuantity,
            'total_price' => $newPrice,
        ];
    }

    return null;
}

// Данные о товарах
$products = [
    ['id' => 1, 'name' => 'Шапка', 'price' => 3000, 'in_stock' => 10],
    ['id' => 2, 'name' => 'Шарф', 'price' => 2000, 'in_stock' => 15],
    ['id' => 3, 'name' => 'Пуховик', 'price' => 10000, 'in_stock' => 80],
    ['id' => 4, 'name' => 'Перчатки', 'price' => 5000, 'in_stock' => 18],
    ['id' => 5, 'name' => 'Варежки', 'price' => 2000, 'in_stock' => 22],
    ['id' => 6, 'name' => 'Штаны', 'price' => 8000, 'in_stock' => 33],
    ['id' => 7, 'name' => 'Шапка еще одна', 'price' => 5000, 'in_stock' => 11],
    ['id' => 8, 'name' => 'Тремо Штаны', 'price' => 7000, 'in_stock' => 32],
    ['id' => 9, 'name' => 'Ботинки', 'price' => 7000, 'in_stock' => 55],
    ['id' => 10, 'name' => 'Лыжи', 'price' => 14000, 'in_stock' => 34],
];
?>

<!-- Форма вывода товаров -->
<h2>Выберите товары и укажите количество</h2>
<form method="post" action="">
    <table>
        <tr><th>ID</th><th>Товар</th><th>Цена за единицу</th><th>На складе</th><th>Количество</th></tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['name']; ?></td>
                <td><?= $product['price']; ?></td>
                <td><?= $product['in_stock']; ?></td>
                <td>
                    <input type="number" name="quantities[]" value="0" min="0" max="<?= $product['in_stock']; ?>">
                </td>
                <input type="hidden" name="products[]" value="<?= $product['id']; ?>">
            </tr>
        <?php endforeach; ?>
    </table>
    <button type="submit">Сформировать чек</button>
</form>

<?php
// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $selectedProducts = $_POST['products'];
    $quantities = $_POST['quantities'];

    // Проверяем, что массивы не пустые
    if (!empty($selectedProducts) && !empty($quantities)) {
        // Создаем чек
        $receipt = [];
        $totalAmount = 0;

        // Проходим по выбранным товарам и их количеству
        foreach ($selectedProducts as $key => $productId) {
            // Находим товар в массиве $products
            $selectedProduct = array_filter($products, function ($product) use ($productId) {
                return $product['id'] == $productId;
            });

            // Получаем первый (и единственный) элемент из результата array_filter
            $selectedProduct = reset($selectedProduct);

            // Получаем запрошенное количество из формы
            $requestedQuantity = $quantities[$key];

            // Перерасчет цены
            $recalculatedItem = recalculatePrice($selectedProduct, $requestedQuantity);

            // Если перерасчет успешен, добавляем информацию о товаре в чек
            if ($recalculatedItem) {
                $receipt[] = [
                    'name' => $selectedProduct['name'],
                    'quantity' => $recalculatedItem['quantity'],
                    'unit_price' => $selectedProduct['price'],
                    'total_price' => $recalculatedItem['total_price'],
                    'stock_value' => $selectedProduct['in_stock'],
                ];

                // Обновляем общую сумму
                $totalAmount += $recalculatedItem['total_price'];
            }
        }

        // Выводим чек
        echo '<h2>Чек</h2>';
        echo '<table>';
        echo '<tr><th>Товар</th><th>Количество</th><th>Цена за единицу</th><th>Общая стоимость</th></tr>';
        foreach ($receipt as $item) {
            echo '<tr>';
            echo '<td>' . $item['name'] . '</td>';


            echo '<td><input type="number" name="quantities[]" value="' . $item['quantity'] . '" min="0" max="' . $item['stock_value'] . '"></td>';
            // echo '<td><input type="number" name="quantities[]" value="' . $item['quantity'] . '" min="0" max="' . $selectedProduct['in_stock'] . '"></td>';

            echo '<td>' . $item['unit_price'] . '</td>';
            echo '<td>' . $item['total_price'] . '</td>';
            echo '</tr>';
        }
        echo '<tr><td colspan="3"><strong>Итого:</strong></td><td><strong>' . $totalAmount . '</strong></td></tr>';
        echo '</table>';
    } else {
        echo '<p>Выберите хотя бы один товар и укажите количество.</p>';
    }
}
?>

</body>
</html>

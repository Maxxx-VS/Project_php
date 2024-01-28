<?php
$cart = array();

function addToCart($id, $name, $price, $quantity = 1) {
    global $cart;
    if(isset($cart[$id])) {
        $cart[$id]['quantity'] += $quantity;
    } else {
        $cart[$id] = array('name' => $name, 'price' => $price, 'quantity' => $quantity);
    }
}

function removeFromCart($id) {
    global $cart;
    if(isset($cart[$id])) {
        unset($cart[$id]);
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['id'])) {
    addToCart($_GET['id'], 'Product', 10.00);
}

if(isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    removeFromCart($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Shopping Cart</title>
</head>
<body>
    <h2>Shopping Cart</h2>
    <?php if(empty($cart)) : ?>
        <p>Your cart is empty</p>
    <?php else : ?>
        <ul>
            <?php foreach($cart as $id => $item) : ?>
                <li><?php echo $item['name']; ?> - $<?php echo $item['price']; ?> x <?php echo $item['quantity']; ?>
                    <a href="?action=add&id=<?php echo $id; ?>">Add</a>
                    <a href="?action=remove&id=<?php echo $id; ?>">Remove</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h2>Add Item</h2>
    <form method="get">
        <input type="hidden" name="action" value="add">
        <input type="hidden" name="id" value="1">
        <input type="submit" value="Add Item 1 to Cart">
    </form>
</body>
</html>
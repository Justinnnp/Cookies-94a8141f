<?php
if (isset($_POST['cart_item']) && !empty($_POST['cart_item'])) {
    $cartItemValue = $_POST['cart_item'];
    if ($cartItemValue >= 1 && $cartItemValue <= 3) {
        $selectedCartItem = $_POST['cart_item'];
        setcookie('cart', $selectedCartItem, time() + 86400, '/');
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>
<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>
    <?php
    if (isset($selectedCartItem) && !empty($selectedCartItem)) {
        echo "Gekozen item: #$selectedCartItem";
    }
    ?>

    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
        <label for="choice">Keuze:</label>
        <input type="number" name="cart_item">
        <input type="submit" value="submit">
    </form>  
    
</body>
</html>
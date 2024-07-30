<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkx</title>
</head>
<body>
    
    <!-- TODO: Log in -->
    <!-- <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="Log in">
    </form> -->

    <!--TODO: Restaurant -->
    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total"> 
    </form>

</body>
</html>

<!-- TODO: Log in -->
<!-- <?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?> -->


<!--TODO: Restaurant -->
<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} {$item}/s <br>";
    echo "Your total is: \${$total}";
?>
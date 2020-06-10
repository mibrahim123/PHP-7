<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="grid.css">
</head>
<body>
<?php
    include 'payment.php';
    include 'products.php';
    // require 'productdas.php'; generate error and stop script execution so table not display
    // include 'productdas.php'; generate warning and continue script execution so table display
    
    ?>

    <div class="grid">
    <div class='grid-item'>Product Name</div>
    <div class='grid-item'>Price</div>
    <?php
    foreach ($product as $key=>$value)
    {
        ?>
    
        <?php
        echo "<div class='grid-item'>".$product[$key][1]["product_name"]."</div><div class='grid-item'>".$payment[$key][2]["price"]."</div>";
        
        ?>
        
        
    <?php
    }

    ?>
    
    </div>

</body>
</html>

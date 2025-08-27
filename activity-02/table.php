<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$products = array(
    array("name" => "Product A", "price" => 10.50, "stock" => 12),
    array("name" => "Product B", "price" => 5.60, "stock" => 7),
    array("name" => "Product C", "price" => 7.00, "stock" => 5),
    array("name" => "Product D", "price" => 25.00, "stock" => 25),
    array("name" => "Product E", "price" => 11.50, "stock" => 15),
    array("name" => "Product F", "price" => 8.00, "stock" => 20)
);
?>

<table>
    <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>

<?php
    $no = 1; 
    foreach ($products as $p) {
        $style = ($p["stock"] < 10) ? 'style="color:red;"' : '';
?>
    
    <tr 
    <?php 
        echo $style; ?>>
        <td><?= $no++; ?></td>
        <td><?= $p["name"] ?></td>
        <td><?= $p["price"] ?></td>
        <td><?= $p["stock"] ?></td>
    </tr>
<?php
   }
?>

</table>
</body>
</html>

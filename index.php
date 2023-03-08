<?php
require_once('database.php');

// Get products
$queryFashion = 'SELECT * FROM fashion';
$statement = $db->prepare($queryFashion);
$statement->execute();
$fashion = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'includes/header.php';?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Product Manager</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Product List</h1>
    <section>
        <!-- display a table of products -->
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Date</th>
                <th>Description</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td> <?php echo $product['productDate']; ?></td>
                <td> <?php echo $product['productDescription']; ?></td>
                <td><form action="delete_product.php" method="post">
                <input type="hidden" name="product_id"
                value="<?php echo $product['productID']; ?>">
                <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Product Manager, Inc.</p>
</footer>
</body>
</html>
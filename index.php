<?php
require_once('database.php');

// Get products
$queryFashion = 'SELECT * FROM fashion';
$statement = $db->prepare($queryFashion);
$statement->execute();
$fashion = $statement->fetchAll();
$statement->closeCursor();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php include 'includes/header.php';?>
<?php include 'includes/footer.php';?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
    
</head>

<!-- the body section -->
<body>
<header><h1>Complain and Delete from your feed</h1></header>
<main>
    <h1 class="product-list-title"></h1>
    <section class="product-grid">
        <!-- display a grid of products -->
        <?php foreach ($fashion as $product) : ?>
            <div class="product">
                <img src="<?php echo $product['image_url']; ?>" alt="Product Image">
                <div class="product-name"><?php echo $product['fashionName']; ?></div>
                <div class="product-description"><?php echo $product['fashionDescription']; ?></div>
                <div class="product-price">$<?php echo $product['fashionPrice']; ?></div>
                <form action="delete_product.php" method="post">
                    <input type="hidden" name="fashion_id" value="<?php echo $product['fashionID']; ?>">
                    <input class="product-delete" type="submit" value="Delete">
                </form>
            </div>
        <?php endforeach; ?>
    </section>
</main>

</body>
</html>

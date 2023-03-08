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
<link href="css/mystyle.css" rel="stylesheet">
<body>
<main class="container">
<div class="bg-light" id= "header">
      <h3 class="text-center">Golden</h3>
      <p class="text-center">Fashion starts here at golden</p>
    </div>
  <div class="starter-template text-center">
    <h1>Best-Sellers List</h1>
    <section>
        <table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Date</th>
                <th>Description</th>
                <th>Image</th>
            </tr>

            <?php foreach ($fashion as $fashion) : ?>
            <tr>
                <td><?php echo $fashion['fashionCode']; ?></td>
                <td><?php echo $fashion['fashionName']; ?></td>
                <td class="right"><?php echo $fashion['fashionPrice']; ?></td>
                <td> <?php echo $fashion['fashionDate']; ?></td>
                <td> <?php echo $fashion['fashionDescription']; ?></td>
                <td><form action="delete_product.php" method="post">
                <input type="hidden" name="fashion_id"
                value="<?php echo $fashion['fashionID']; ?>">
                <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

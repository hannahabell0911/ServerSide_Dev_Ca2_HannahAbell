<?php
require_once('database.php');

// Get products
$queryFashion = 'SELECT * FROM fashion';
$statement = $db->prepare($queryFashion);
$statement->execute();
$fashion = $statement->fetchAll();
$statement->closeCursor();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
?>

<?php include 'includes/header.php';?>
<link href="css/mystyle1.css" rel="stylesheet">
<body>
<main class="container">
<div class="bg-light" id= "header">
      <h3 class="text-center">Golden</h3>
      <p class="text-center">Fashion starts here at golden</p>
    </div>

 
    <h1>Best-Sellers List</h1>
    <div class="card-container">
            <?php foreach ($fashion as $fashion) : ?>
              <div class="card" style="width: 18rem;">
  <img class="card-img-top" src= <?php echo $fashion['image_url']; ?> alt="Card image cap">
  <div class="card-body">
  <?php echo $fashion['fashionCode']; ?>
    <h5 class="card-title"><?php echo $fashion['fashionName']; ?></h5>
    <p class="card-text"><?php echo $fashion['fashionDescription']; ?></p>
    <a href="#" class="btn btn-primary"><?php echo $fashion['fashionPrice'];?></a>
    <a href="#" class="btn btn-primary"><?php echo $fashion['fashionDate'];?></a>
  </div>
              </div>
      </div>
 
  
<?php endforeach; ?>
 
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>

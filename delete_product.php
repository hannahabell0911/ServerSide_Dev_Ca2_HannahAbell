<?php
 include 'includes/header.php';?>
 <?php
 include 'includes/footer.php';?>

<?php
require_once('database.php');


// Get products for product dropdown
$queryProducts = 'SELECT fashionID, fashionName FROM fashion ORDER BY fashionID';
$statement1 = $db->prepare($queryProducts);
$statement1->execute();
$products = $statement1->fetchAll();
$statement1->closeCursor();
?>


<?php
try {
    $conn = new PDO("mysql:host=https://mysql07.comp.dkit.ie/;dbname=D00249620", 'D00249620', 'dyPSnVPj');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product_name = $_POST['product_name'];

    try {
        $sql = "DELETE FROM fashion WHERE fashionName = :product_name";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':product_name', $product_name);


        if ($stmt->execute() === TRUE) {
            echo "Record Deleted Successfully";
        } else {
            echo "Error: " . $stmt->$errors;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $stmt = null;
    $conn = null;
}
}

?>

<!-- display errors, if any -->
<?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>





<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // validate name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
        $errors[] = "Name can only contain letters and white space.";
    }
    
    // validate phone number
    if (empty($_POST['phone'])) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match("/^[0-9]*$/", $_POST['phone'])) {
        $errors[] = "Phone number can only contain numbers.";
    }
    
    // validate email
    if (empty($_POST['email'])) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    // if there are no errors, continue with form processing
    if (empty($errors)) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $product_name = $_POST['product_name'];
        $complaint = $_POST['complaint'];
        
    }
}
?>


<form action="delete_product.php" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" required><br>
  <label for="email">Email:</label>
  <input type="email" name="email" required><br>
  <label for="phone">Phone:</label>
  <input type="tel" name="phone" required><br>
  <?php if(isset($phoneError)): ?>
    <span class="error"><?php echo $phoneError; ?></span><br>
  <?php endif; ?>
  <label for="product_name">Product Name:</label>
  <select name="product_name">
    <?php foreach ($products as $product) : ?>
        <option value="<?php echo $product['fashionName']; ?>">
  <?php echo $product['fashionName']; ?>
</option>

    <?php endforeach; ?>
  </select><br>
  <label for="complaint">Complaint:</label><br>
  <textarea name="complaint" rows="5" cols="40"></textarea><br>
  <input type="submit" value="Submit">
</form>






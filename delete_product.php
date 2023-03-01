<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'fashion_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($fashion_id != false) {
    $query = 'DELETE FROM fashion
              WHERE fashionID = :fashion_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':fashion_id', $fashion_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');
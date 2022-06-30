<?php
require_once('Connection.php');

function getAllProducts()
{
  // Setup SQL statement
  $sql = "SELECT * FROM products";
  try {
    $conn = createConnection();
    // Query the statement using connection PDO
    $result = $conn->query($sql, PDO::FETCH_ASSOC);
    // Array init
    $products = [];
    // Iterate over query result
    while ($product = $result->fetch()) {
      // Store each data in variables
      $id = $product['id'];
      $name = $product['name'];
      $price = $product['price'];
      $imageUrl = $product['image_url'];
      $options = json_decode($product['options']); // Use json_decode() to decode JSON string into PHP object
      // Create new objects based on their category value
    }
    return $products;
  } catch (PDOException $e) {
    die('Error reading data: ' . $e->getMessage());
  }
}

function addNewProduct($payload)
{
  try {
    $conn = createConnection();
    $sql = 'INSERT INTO products (name, price, image_url, options) VALUES (?, ?, ?, ?)'; //prepare statement -> mendefinisikan dlu query sbelom di masukkan nilainya/eksekusi
    $statement = $conn->prepare($sql);
    $options = array(
      'category' => $payload['category']
    );
    switch ($payload['category']) {
      case 'processor':
        $options['cores'] = $payload['cores'];
        break;
      case 'storage':
        $options['type'] = $payload['storageType'];
        break;
      case 'memory':
      case 'vga':
        $options['size'] = $payload['size'];
        break;
    }
    $statement->execute([
      $payload['name'], $payload['price'], $payload['imageUrl'],
      json_encode($options)
    ]);
  } catch (PDOException $e) {
    die('Error creating data: ' . $e->getMessage());
  }
}

function getSingleProduct($id)
{
  try {
    $conn = createConnection();
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql, PDO::FETCH_ASSOC);

    $data = $result->fetch();

    // Store each data in variables
    $id = $data['id'];
    $name = $data['name'];
    $price = $data['price'];
    $imageUrl = $data['image_url'];
    $options = json_decode($data['options']); // Use json_decode() to decode JSON string into PHP object

    // Create new objects based on their category value
    return;
  } catch (PDOException $e) {
    die('Error reading data: ' . $e->getMessage());
  }
}


function updateProduct($payload)
{
  try {
    $conn = createConnection();
    $sql = 'UPDATE products SET name=?, price=?, image_url=?, options=? WHERE id=?';
    $statement = $conn->prepare($sql);
    $options = array(
      'category' => $payload['category']
    );
    switch ($payload['category']) {
      case 'processor':
        $options['cores'] = $payload['cores'];
        break;
      case 'storage':
        $options['type'] = $payload['storageType'];
        break;
      case 'memory':
      case 'vga':
        $options['size'] = $payload['size'];
        break;
    }
    $statement->execute([
      $payload['name'], $payload['price'], $payload['imageUrl'], json_encode($options),
      $payload['id']
    ]);
  } catch (PDOException $e) {
    die('Error updating data: ' . $e->getMessage());
  }
}

function deleteProduct($id)
{
  try {
    $conn = createConnection();
    $sql = "DELETE FROM products WHERE id = $id";
    $conn->query($sql);
  } catch (PDOException $e) {
    die('Error deleting data: ' . $e->getMessage());
  }
}

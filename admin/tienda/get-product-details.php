<?php
// get-product-details.php
require "../../includes/config/db.php";
$db = conectarDB();
header('Content-Type: application/json');

$category = $_GET['category'];
$id = $_GET['id'];

if (!in_array($category, ['ropapuma', 'ropacasual', 'accesorios'])) {
    echo json_encode(['error' => 'Invalid category']);
    exit;
}

$consql = "SELECT * FROM $category WHERE codigo = ?";
$stmt = $db->prepare($consql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    echo json_encode(['error' => 'Product not found']);
    exit;
}

echo json_encode(['data' => $product]);
?>

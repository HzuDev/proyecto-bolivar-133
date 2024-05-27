<?php
require "../../../includes/config/db.php";
$db = conectarDB();
header('Content-Type: application/json');
$response = array();

if (isset($_GET['id'])) {
    $productId = intval($_GET['id']);
    $query = "SELECT * FROM ropapuma WHERE codigo = $productId";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        $response['data'] = $product;
    } else {
        $response['error'] = 'Product not found';
    }
} else {
    $response['error'] = 'Invalid product ID';
}

echo json_encode($response);
?>
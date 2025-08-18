<?php
include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);

$customer_email = $conn->real_escape_string($data['customer_email']);
$product_name = $conn->real_escape_string($data['product_name']);
$qty = (int)$data['qty'];
$total = (float)$data['total'];

$sql = "INSERT INTO sales (customer_email, product_name, qty, total, sale_date) VALUES ('$customer_email', '$product_name', $qty, $total, NOW())";
if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
$conn->close();
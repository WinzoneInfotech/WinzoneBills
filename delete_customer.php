<?php
<?php
include 'db.php';

$id = (int)$_GET['id'];
$sql = "DELETE FROM customers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
$conn->close();
?>

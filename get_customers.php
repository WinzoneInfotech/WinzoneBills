<?php
<?php
include 'db.php';

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

$customers = [];
while($row = $result->fetch_assoc()) {
    $customers[] = $row;
}
header('Content-Type: application/json');
echo json_encode($customers);
$conn->close();
?>
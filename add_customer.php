<?php
<?php
include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);

$businessName = $conn->real_escape_string($data['businessName']);
$address = $conn->real_escape_string($data['address']);
$city = $conn->real_escape_string($data['city']);
$state = $conn->real_escape_string($data['state']);
$pincode = $conn->real_escape_string($data['pincode']);
$country = $conn->real_escape_string($data['country']);
$email = $conn->real_escape_string($data['email']);
$phone = $conn->real_escape_string($data['phone']);
$pan = $conn->real_escape_string($data['pan']);
$gst = $conn->real_escape_string($data['gst']);
$logo = $conn->real_escape_string($data['logo']);

$sql = "INSERT INTO customers (businessName, address, city, state, pincode, country, email, phone, pan, gst, logo)
        VALUES ('$businessName', '$address', '$city', '$state', '$pincode', '$country', '$email', '$phone', '$pan', '$gst', '$logo')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
$conn->close();
?>
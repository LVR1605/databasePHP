<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasPHP/config/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

$conn->close();
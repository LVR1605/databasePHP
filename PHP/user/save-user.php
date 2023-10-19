

<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasPHP/config/database.php';


// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, gender) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $gender);
// set parameters and execute 
$firstname = $_POST["first_name"]; 
$lastname = $_POST["last_name"]; 
$gender = $_POST["gender"]; 
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");
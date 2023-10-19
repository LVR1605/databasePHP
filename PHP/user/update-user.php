

<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasPHP/config/database.php';


// prepare and bind
$stmt = $conn->prepare("UPDATE users SET
        first_name = ?,
        last_name = ?,
        gender = ?,
        update_at = ?
        WHERE id = ?");
$stmt->bind_param("sssss", $firstname, $lastname, $gender, $update_at, $id);


// set parameters and execute 
$firstname = $_POST["first_name"]; 
$lastname = $_POST["last_name"]; 
$gender = $_POST["gender"];
$update_at = date("Y-m-d H:i:s");
$id = $_POST["id"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");


<?php

require $_SERVER["DOCUMENT_ROOT"] . '/databasPHP/config/database.php';


// prepare and bind
$stmt = $conn->prepare("UPDATE users SET
        deleted_at = ?
        WHERE id = ?");
$stmt->bind_param("ss", $deleted_at, $id);


// set parameters and execute 
$deleted_at = date("Y-m-d H:i:s");
$id = $_GET["id"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?delete-success=true");
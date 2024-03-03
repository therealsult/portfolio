<?php
require_once('../includes/connect.php');

//move_uploaded_file etc FIRST, as we need the new name
//save the name in $filename variable



$query = "INSERT INTO projects (title,project_description,published_date) VALUES (?,?,?)";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['project_description'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['published_date'], PDO::PARAM_STR);
// $stmt->bindParam(4, $filename, PDO::PARAM_STR);

$stmt->execute();
$last_id = $connection->lastInsertId();
$stmt = null;
header('Location: branding.php');
?>
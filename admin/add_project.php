<?php
require_once('../includes/connect.php');

// Check if file was uploaded without errors
if(isset($_FILES["project_image"]) && $_FILES["project_image"]["error"] == 0){
    // Specify the directory for file uploads
    $uploadDir = '../images/';
    // Generate a unique filename
    $filename = uniqid() . '_' . basename($_FILES["project_image"]["name"]);
    // Path to save the uploaded file
    $targetFilePath = $uploadDir . $filename;

    // Try to upload file
    if(move_uploaded_file($_FILES["project_image"]["tmp_name"], $targetFilePath)){
        // Prepare the SQL query
        $query = "INSERT INTO projects (title, project_description, published_date, project_image) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($query);
        // Bind parameters
        $stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
        $stmt->bindParam(2, $_POST['project_description'], PDO::PARAM_STR);
        $stmt->bindParam(3, $_POST['published_date'], PDO::PARAM_STR);
        $stmt->bindParam(4, $filename, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();
        // Get the last inserted ID
        $last_id = $connection->lastInsertId();
        // Close the statement
        $stmt = null;
        // Redirect to branding.php after successful insertion
        header('Location: branding.php');
        exit();
    } else {
        echo "There was an error uploading your file.";
    }
} else {
    echo "No file uploaded or file upload error occurred.";
}
?>

<?php 
ob_start();

    include('config.php');
    $postData = $_GET['post_name'];
    $sql = "INSERT INTO post (postname)
VALUES ('".$postData."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
header('Location: http://localhost/phptest/');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// $conn->close();

?>
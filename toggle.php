<?php

// Replace these values with your own database credentials
$servername = "your_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed");
}

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "UPDATE User
            SET Status = IF(Status = 0, 1, 0)
            WHERE ID = '$id'";

    $conn->query($sql);

    $result = $conn->query("SELECT Status FROM User WHERE ID='$id'");
    $row = $result->fetch_assoc();

    echo $row["Status"];
}

$conn->close();

?>
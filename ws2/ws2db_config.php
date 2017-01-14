<?php
$conn = mysqli_connect("127.0.0.1", "root", "12345", "projeto_eng_soft");
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
?>
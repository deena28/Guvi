<?php
    $email = $_GET['email']
    $password = $_GET['password']
    $conn = new mysqli("localhost","root","pass","guvi");
    $result = $conn->query("SELECT * FROM login")
    if ($result.password == $password) {
        $data = 0;
    } 
    $conn->close();
    echo json_encode($data)
?>
<?php
    if(!isset($_POST['cred'])){
        include (__DIR__."\..\login.html");
    }else{
        $input = $_POST['cred'];
        $cred = json_decode($input);
        $conn = new mysqli("localhost","root","","guvi");
        $stmt = $conn->prepare("SELECT * FROM Login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $email = $cred->email;
        $stmt->execute();
        $result = $stmt->get_result();
        echo json_encode($result->fetch_assoc());
    }
?>
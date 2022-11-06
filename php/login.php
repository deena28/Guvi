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
        $resultset = $result->fetch_assoc();
        if($resultset->password == $cred->password){
            $redis = new Redis();
            $redis->connect('127.0.0.1',6379);
            $redis->set("isLoggedIn",true);
            $redis->set("loginid",$resultset->id);
            echo $resultset->id;
        }else{
            echo 0;
        }
    }
?>
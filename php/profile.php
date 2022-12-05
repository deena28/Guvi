<?php 
    $redis = new Redis();
    $redis->connect('127.0.0.1',6379);
    $docid = $redis-.get("loginid");
    $conn = new mysqli("localhost","root","","guvi");
     $stmt = $conn->prepare("SELECT * FROM Login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $email = $docid;
        $stmt->execute();
        
        
        $result = $stmt->get_result();
        $resultset = $result->fetch_assoc();
        echo 1;
    echo "<script>\n";
    echo " let doc = ".$resultset;
    echo "</script>";
    include(__DIR__."\..\profile.html");
?>

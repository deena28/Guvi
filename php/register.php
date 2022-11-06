<?php 
    if(!isset($_POST['detail'])){
        include(__DIR__."\..\\register.html");
    }else{
        $input = $_POST['detail'];
        $cred = json_decode($input);
        $mongo = new MongoClient()
        $db = $mongo->guvi;
        $collection = $db->login;
        $document = array(
            "name" => $cred->name,
            "DOB" => $cred->DOB
        )
        $collection->insert($document)
        $docid = $document['_id']
        $conn = new mysqli("localhost","root","","guvi");
        $stmt = $conn->prepare("INSERT INTO Login VALUES(?,?,?)");
        $stmt->bind_param("sss", $email,$password,$id);
        $email = $cred->email;
        $password = $cred->password;
        $id = $docid;
        echo $stmt->execute();
    }
?>
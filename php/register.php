<?php

if (!isset($_POST['detail'])) {
    include(__DIR__ . "\..\\register.html");
} else {
    $input = $_POST['detail'];
    $cred = json_decode($input);


    $conn = new mysqli("localhost", "root", "", "guvi");
    $stmt = $conn->prepare("INSERT INTO login VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssss", $email, $password, $fname, $dob, $gender, $dept, $desig, $address1, $city, $state1, $phone, $zip);
    $email = strval($cred->email);
    $password = strval($cred->password);
    $fname = strval($cred->fullname);
    $dob = strval($cred->DOB);
    $gender = strval($cred->gender);
    $dept = strval($cred->dept);
    $desig = strval($cred->desig);
    $address1 = strval($cred->address);
    $city = strval($cred->city);
    $state1 = strval($cred->state);
    $phone = strval($cred->phone);
    $zip = strval($cred->zip);
    $stmt->execute();
    echo 1;
}
?>
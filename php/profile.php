<?php 
    $redis = new Redis();
    $redis->connect('127.0.0.1',6379);
    $docid = $redis-.get("loginid");
    $mongo = new MongoClient()
    $db = $mongo->guvi;
    $collection = $db->login;
    $document=$collection->find({id:$docid})
    echo "<script>\n";
    echo " let doc = ".$document;
    echo "</script>";
    include(__DIR__."\..\profile.html");
?>
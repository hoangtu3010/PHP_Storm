<?php
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "product_php";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_errno){
        die("Connect Error...");
    }

    $txt_sql = "delete from categories where id = '$id'";
    $rs = $conn->query($txt_sql);
    header("location: listCategory.php");

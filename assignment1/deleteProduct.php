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

    $sql_txt = "delete from products where id = $id";
    $rs = $conn->query($sql_txt);
    header("location: lab1.php");
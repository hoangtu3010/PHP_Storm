<?php
    $name = $_POST["name"];
    $price = $_POST["price"];
    $painted = $_POST["painted"];
    $ncc = $_POST["ncc"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "product_php";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_errno){
        die("Connect Error...");
    }

    $sql_txt = "insert into products (name, price, painted, ncc) values ('$name', '$price', '$painted', '$ncc')";

    if ($conn->query($sql_txt) === true){
        header("location: lab1.php");
    }else{
        echo "ERROR: ".$conn->error;
    }
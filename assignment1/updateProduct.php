<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $painted = $_POST["painted"];
    $ncc = $_POST["ncc"];

    $servername = "localhost";
    $username = "root";
    $passworld = "";
    $db = "product_php";
    // create connection
    $conn = new mysqli($servername,$username,$passworld,$db);

    // kiểm tra kết nối
    if ($conn->connect_errno){
        die("Connect error..."); // die làm dừng chương trình tại đây
    }

    $sql_txt = "update products set name = '$name', price = '$price', painted = '$painted', ncc = '$ncc' where id = '$id'";
    if ($conn->query($sql_txt) === true){
        header("Location: lab1.php");
    }else{
        echo "ERROR: ".$conn->error;
    }

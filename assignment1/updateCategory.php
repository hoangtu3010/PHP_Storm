<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $painted = $_POST["painted"];
    $slug = $_POST["slug"];
    $count = $_POST["count"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "product_php";

    $conn = new mysqli($servername, $username, $password, $db);

    $sql_txt = "update categories set name = '$name', painted = '$painted', slug = '$slug', count = '$count' where id = '$id'";

    if ($conn->query($sql_txt) === true){
        header("Location: listCategory.php");
    }else{
        echo "ERROR: ".$conn->error;
    }
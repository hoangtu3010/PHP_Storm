<?php
    $name = $_POST["name"];
    $painted = $_POST["painted"];
    $slug = $_POST["slug"];
    $count = $_POST["count"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "product_php";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_errno){
        die("Connect Error...");
    }

    $sql_txt = "insert into categories (name, painted, slug, count) values ('$name', '$painted', '$slug', '$count')";

    if ($conn->query($sql_txt) === true){
        header("location: listCategory.php");
    }else{
        echo "ERROR: ".$conn->error;
    }

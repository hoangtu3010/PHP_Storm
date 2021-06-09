<?php include_once "sessionSP.php" ?>
<?php include_once "databaseSP.php"?>
<?php
//    $id = $_GET["id"];
//    $addCart = $_SESSION["cart"];
//    $ds = queryDB("select * from products where id = '$id'");
//
//    if (count($ds) == 0){
//        header("location: lab1.php");
//    }
//
//    $sp = $ds[0];
//    if (!in_array($sp, $addCart)){
//        $addCart[] = $sp;
//        $_SESSION["cart"] = $addCart;
//    }
//    header("location: lab1.php");
    $cart = [];
    if(isset($_SESSION["cart"])){
        $cart = $_SESSION["cart"];
    }
    $id = $_GET["id"];
    //lấy sp tu db de cho vao cart
    $sql = "select * from products where id = '$id'";
    $ds = queryDB($sql);
    if (count($ds) > 0){
        $sp = $ds[0]; // vì chỉ có 1 sp có id = $id
        $sp["qty"] = 1;
        // kiem tra xem da co trong gio hang chua, neu co roi thi tang qty, khong co moi them
        if (checkCartItem($cart, $sp)){
            foreach ($cart as $key=>$item){
                if ($item["id"] = $sp["id"]){
                    $cart[$key]["qty"]++;
                }
            }
        }else{
            $cart[] = $sp;
        }
        $_SESSION["cart"] = $cart;
        header("location: lab1.php");
    }else{
        echo "Sản phẩm không tồn tại";
    }

    function checkCartItem($cart, $sp)
    {
        foreach ($cart as $item) {
            if ($item["id"] == $sp["id"]) {
                return true;
            }
        }
        return false;
    }


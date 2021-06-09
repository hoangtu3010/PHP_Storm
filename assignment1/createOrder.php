<?php
    include_once "sessionSP.php";
    include_once "databaseSP.php";

    $customer = $_POST["customer"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];

    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[]; // isset: kiểm tra có tồn tại hay không

    if (count($cart)>0){
        $total = 0;
        foreach ($cart as $item){
            $total += $item["price"] * $item["qty"];
        }
        try {
            $sql_order = "insert into oders (grandtotal, customer, tel, address) values ('$total', '$customer', '$tel', '$address')";
            $conn = connectDB();
            $order_id = 0;
            if ($conn->query($sql_order) === true){
                $order_id = $conn->insert_id; // lấy id của đơn vừa tạo
            }
            if ($order_id > 0){
                $sql_item = "insert into order_products (order_id, product_id, qty, price) values ";
                $values = [];
                foreach ($cart as $item){
                    $sp_id = $item["id"];
                    $price = $item["price"];
                    $qty = $item["qty"];
                    $values[] = "($order_id, $sp_id, $qty, $price)";
                }
                $v = implode(",", $values); // chuyển mảng thành 1 string
                $sql_item.= $v;
                insertOrUpdateDB($sql_item);
                echo "Tạo đơn thành công";
            }
        }catch (Exception $e){
            var_dump($e);
        }
    }else{
        echo "Không có sản phẩm trong giỏ hàng!";
    }



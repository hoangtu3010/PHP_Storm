
<?php include_once "databaseSP.php"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect"   href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
        rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <?php
        $sql_txt = "select * from products";
        $dssanpham = queryDB($sql_txt);
    ?>
    <div class="container">
        <h1 class="text-center" style="margin-top: 20px; padding: 10px; background-color: rgb(13 110 253 / 25%) ;">Danh sách sản phẩm</h1>
    </div>
    <div class="container" style="padding: 50px 10px">
        <a href="addProduct.php"><button class="btn btn-primary" style="margin-bottom: 20px">Thêm mới</button></a>
        <a href="listProductCart.php"><button class="btn btn-info" style="margin-bottom: 20px"><i class="bi bi-cart"></i></button></a>
        <table class="table table-striped table-hover">
            <thead>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>NCC</th>
                <th colspan="3" class="text-center">Tools</th>
            </thead>
            <tbody>
                <?php foreach ($dssanpham as $sp){ ?>
                    <tr>
                        <td><?php echo $sp["id"]; ?></td>
                        <td><?php echo $sp["name"]; ?></td>
                        <td><?php echo $sp["price"]; ?></td>
                        <td><?php echo $sp["painted"]; ?></td>
                        <td><?php echo $sp["ncc"]; ?></td>
                        <td class="text-center"><a href="editProduct.php?id=<?php echo $sp["id"] ?>" style="color: #000"><i class="bi bi-pencil-square"></i></a></td>
                        <td class="text-center"><a href="deleteProduct.php?id=<?php echo $sp["id"] ?>" style="color: #000"><i class="bi bi-trash"></i></a></td>
                        <td class="text-center"><a href="addCart.php?id=<?php echo $sp["id"] ?>" style="color: #000"><i class="bi bi-cart-plus"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
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
    <div class="container">
        <h1 class="text-center" style="margin-top: 20px; padding: 10px; background-color: rgb(13 110 253 / 25%) ;">Danh sách sản phẩm</h1>
    </div>
    <?php
        $dssanpham = [];
        $dssanpham[] = [
            "stt"=>1,
            "name"=>"Iphone13",
            "price"=>2000,
            "describe"=>"Good",
            "supplier"=>"Apple"
        ];
        $dssanpham[] = [
            "stt"=>2,
            "name"=>"Samsung A20S",
            "price"=>1500,
            "describe"=>"Great",
            "supplier"=>"Samsung"
        ];
        $dssanpham[] = [
            "stt"=>3,
            "name"=>"Oppo Zeno",
            "price"=>800,
            "describe"=>"Nice",
            "supplier"=>"Oppo"
        ];
        $dssanpham[] = [
            "stt"=>4,
            "name"=>"Nokia 1280",
            "price"=>20,
            "describe"=>"Ohhh",
            "supplier"=>"Nokia"
        ];
    ?>
    <div class="container" style="padding: 50px 10px">
        <a href="addProduct.php"><button class="btn btn-primary" style="margin-bottom: 20px">Thêm mới</button></a>
        <table class="table table-striped table-hover">
            <thead>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>NCC</th>
                <th class="text-center">Tool</th>
            </thead>
            <tbody>
                <?php foreach ($dssanpham as $sp){ ?>
                    <tr>
                        <td><?php echo $sp["stt"]; ?></td>
                        <td><?php echo $sp["name"]; ?></td>
                        <td><?php echo $sp["price"]; ?></td>
                        <td><?php echo $sp["describe"]; ?></td>
                        <td><?php echo $sp["supplier"]; ?></td>
                        <td class="text-center"><a href="editProduct.php" style="color: #000"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>

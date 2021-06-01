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
    <title>Danh sách Category</title>
</head>
<body>
    <div class="container">
        <?php
            $dscategory = [];
            $dscategory[] = [
                "name"=>"SmartPhone",
                "describe"=>"This is smartphone",
                "slug"=>"smartphone",
                "count"=>83
            ];
            $dscategory[] = [
                "name"=>"PC",
                "describe"=>"This is pc",
                "slug"=>"pc",
                "count"=>26
            ];
            $dscategory[] = [
                "name"=>"Airpod",
                "describe"=>"This is airpod",
                "slug"=>"airpod",
                "count"=>123
            ];
        ?>
        <h1 class="text-center" style="margin: 20px 0 50px 0; padding: 10px; background-color: rgb(13 110 253 / 25%) ;">Danh sách Category</h1>
        <a href="addCategory.php"><button class="btn btn-primary" style="margin-bottom: 20px">Thêm mới</button></a>
        <table class="table table-striped table-hover">
            <thead>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Slug</th>
            <th>Count</th>
            <th class="text-center">Tool</th>
            </thead>
            <tbody>
            <?php foreach ($dscategory as $ct){ ?>
                <tr>
                    <td><?php echo $ct["name"]; ?></td>
                    <td><?php echo $ct["describe"]; ?></td>
                    <td><?php echo $ct["slug"]; ?></td>
                    <td><?php echo $ct["count"]; ?></td>
                    <td class="text-center"><a href="editCategory.php" style="color: #000"><i class="bi bi-pencil-square"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php 
    require("connect.php"); 
    $sql = "SELECT * FROM `sanpham` "; 
    $query = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css\read.css">
</head>
<body>
    <h1>Quản lý danh sách sản phẩm </h1>
    <button>
        <a href="create.php">Thêm sản phẩm</a>
    </button>
    <table id="productList">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Hành động</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?= $row["masp"] ?></td>
        <td><?= $row["tensp"] ?></td>
        <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
        <td><img style="width: 200px; height:200px" src='./images/<?= $row["imgURL"] ?>' alt=""></td>
        <td>
            <a href="update.php?id=<?= $row['masp']?>">Sửa</a>
                &nbsp;
            <a onclick="return xoasanpham()" href= "delete.php?id=<?= $row['masp']?>">Xóa</a>
        </td>
        </tr>
        <?php }?>
    </table>

    <script>
        function xoasanpham(){  
            var conf = confirm('Bạn có chắc chắn xóa sản phẩm hay không ?'); 
            return conf;
        }
    </script>

</body>
</html>
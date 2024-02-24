<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast-Food</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<body>


    <div class="row">
        <div class="col-3 text-center">

            <?php require('./nav.php') ?>
        </div>
        <div class="col">
            <h1>จัดการข้อมูลสินค้า</h1>
            <div class="row">
                <div class="col-3">
                    <form method="post" id="form0">
                        <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="txtSearch">
                </div>
                <div class="col-3">
                   <select class="form-select" name="slPType">
                        <option value="">เลือกประเภทสินค้า</option>
                   </select>
                </div>
                <div class="col-6">
                    <button name="btnS" class="btn btn-outline-info" type="submit"><i class="bi bi-search"></i> ค้นหา</button>
                    <a href="./productInsert.php" class="btn btn-success"><i class="bi bi-file-plus"></i> เพิ่มสินค้าใหม่</a>
                </div>
                </form>
            </div>

            <table class="table">
                <tr>
                    <th>สินค้า</th>
                    <th class="w-25">ประเภทสินค้า</th>
                    <th class="w-25">การจัดการข้อมูล</th>
                </tr>
                


                <tr>
                    <td>
                       <div class="row">
                        <div class="col-3">
                            <img src="../img/DUser.jpg"class="img-thumbnail">
                        </div>
                        <div class="col">
                            <h5>สินค้า 1</h5>
                            ราคา 500 บาท
                        </div>
                       </div>
                    </td>
                    <td>
                        ประเภทสินค้า 1
                    </td>
                    <td class="pe-5">
                        <a class="btn btn-warning mx-2 mb-1" href="productUpdate.php"> <i class="bi bi-gear"></i> แก้ไข</a>
                        <a class="btn btn-danger mx-2 " href="#"> <i class="bi bi-trash3"></i> ลบ</a>
                    </td>
                </tr>


            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
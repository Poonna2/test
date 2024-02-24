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
            <h1>จัดการข้อมูลประเภทสินค้า</h1>
            <div class="row">
                <div class="col-4">
                    <form method="post" id="form0">
                        <input type="text" class="form-control" placeholder="ประเภทสินค้า" name="txtSearch">
                </div>
                <div class="col-2">
                    <button name="btnS" class="btn btn-outline-info" type="submit"><i class="bi bi-search"></i> ค้นหา</button>
                </div>
                </form>
            </div>

            <table class="table">
                <tr>
                    <th>ประเภทสินค้า</th>
                    <th class="w-50">การจัดการข้อมูล</th>
                </tr>
                <form method="post">
                    <tr>
                        <td class="row">
                            <input type="text" class="form-control" name="productType_name" placeholder="ประเภทสินค้า">

                        </td>
                        <td class="pe-5">
                            <button type="submit" class="btn btn-success w-50" name="btnSave"> <i class="bi bi-floppy2"></i> บันทึก</button>
                        </td>
                    </tr>
                </form>


                <tr>
                    <td>
                        1. สินค้าประเภทที่ 1
                    </td>
                    <td class="pe-5">
                        <a class="btn btn-warning mx-2 mb-1" href="productTypeUpdate.php"> <i class="bi bi-gear"></i> แก้ไข</a>
                        <a class="btn btn-danger mx-2 " href="#"> <i class="bi bi-trash3"></i> ลบ</a>
                    </td>
                </tr>


            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
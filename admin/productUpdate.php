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
                <div class="col-11">
                    <h3>เพิ่มข้อมูลสินค้า</h3>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-2">
                                <img src="../img/DUser.jpg"class="img-thumbnail" style="height:150px">
                            </div>
                            <div class="col">
                                <input type="file" name="product_pic" class="form-control">
                            </div>
                        </div>
                        <input type="text" name="product_name"class="form-control w-100 my-1"
                        placeholder="ชื่อสินค้า" required>
                        <select class="form-select" name="pType_id" required>
                            <option value="">เลือกประเภท</option>
                        </select>
                        <input type="text" name="product_price"class="form-control w-100 my-1"
                        placeholder="ราคา" required>
                        <input type="text" name="product_unit"class="form-control w-100 my-1"
                        placeholder="หน่วยนับ" required>
                        <button type="submit" name="btn1" class="btn btn-success w-100"><i class="bi bi-floppy2"></i> บันทึก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
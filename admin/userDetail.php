<?php 
    require('../utility.php');
    ConnectDB();
    $sql = 'SELECT * FROM users WHERE user_id="'.$_GET['user_id'].'"';
    $rs = mysqli_query($GLOBALS['conn'],$sql);
    $data = mysqli_fetch_assoc($rs);

?>
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
        <div class="col-6 border rounded mt-2 p-2 ">
                    <h1>ข้อมูลผู้ใช้งาน</h1>
                    <?php 
                        if($data['user_pic']==null){
                            echo '<img src="../img/DUser.jpg" class="img img-thumbnail" style="width:75px;height:75px">';
                        }else
                        echo '<img src="../img/'.$data['user_pic'].'"
                        class="img img-thumbnail" 
                        style="width:75px;height:75px">';

                    ?>
                   
                    
                    <table class="table ">
                        <tr>
                            <th class=" w-25">สถานะ</th>
                            <td>
                                <?php 
                                    if($data['user_status']==0){
                                        echo 'รออนุมัติ';
                                    }elseif($data['user_status']==1){
                                        echo 'ปกติ';
                                    }else{
                                        echo 'ถูกแบน';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th class=" w-25">อีเมล์</th>
                            <td><?php echo $data['user_id'] ?></td>
                        </tr>
                        <tr>
                            <th class=" w-25">ชื่อ-สกุล</th>
                            <td><?php echo $data['user_name'] ?></td>
                        </tr>
                        <tr>
                            <th class=" w-25">เบอร์โทรศัพท์</th>
                            <td><?php echo $data['user_tel'] ?></td>
                        </tr>
                        <tr>
                            <th class=" w-25">ที่อยู่</th>
                            <td><?php echo $data['user_address'] ?></td>
                        </tr>
                       
                    </table>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
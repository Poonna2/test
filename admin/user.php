<?php 
    require('../utility.php');
    ConnectDB();

    if(isset($_GET['user_id'])&&isset($_GET['status'])){
        $sql = 'UPDATE users SET user_status='.$_GET['status'].' WHERE user_id = "'.$_GET['user_id'].'"';
        mysqli_query($GLOBALS['conn'],$sql);
    }

    if(isset($_GET['del_id'])){
        $sql ='DELETE FROM users WHERE user_id="'.$_GET['del_id'].'"';
        mysqli_query($GLOBALS['conn'],$sql);
    }

    $cond = ' ';
    if(isset($_POST['btnS'])){
        $cond = ' WHERE user_id LIKE "%'.$_POST['txtSearch'].'%"
                   OR user_name LIKE "%'.$_POST['txtSearch'].'%"';
    }

    $sql = 'SELECT * FROM users '.$cond;
    $rs = mysqli_query($GLOBALS['conn'],$sql);
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
            <h1>จัดการข้อมูลผู้ใช้งาน</h1>
            <div class="row">
                <div class="col-8">
            <form method="post" id="form0">
               
            <input type="text" class="form-control" placeholder="e-mail/ชื่อ-นามสกุล"
            name="txtSearch">
</div>
                    <div class="col-4">
                <button name="btnS" class="btn btn-outline-info" type="submit"><i class="bi bi-search"></i>ค้นหา</button>
            </form>
                    </div>
                    </div>
            <table class="table">
                <tr>
                    <th>ผู้ใช้งาน</th>
                    <th class="w-50">การจัดการข้อมูล</th>
                </tr>

                <?php 
                    $i = 0;
                    while($data = mysqli_fetch_assoc($rs)){
                        $i++;
                ?>
                <tr>
                    <td>
                        <?php echo $i.'. '.$data['user_name'];?>
                        <br>
                        <?php echo $data['user_id'];?>
                    </td>
                   
                    <td>
                        <a href="userDetail.php?user_id=<?php echo $data['user_id'] ?>" class="btn btn-info">
                            <i class="bi bi-person-fill-exclamation"></i> ดูข้อมูล</a>
                        <?php if($data['user_status']==0){ ?>
                        <a href="user.php?user_id=<?php echo $data['user_id'] ?>&status=1"  class="btn btn-success">
                            <i class="bi bi-person-fill-check"></i> อนุมัติ</a>
                        <?php } 
                        if($data['user_status']==1){ ?>
                        <a href="user.php?user_id=<?php echo $data['user_id'] ?>&status=-1"  class="btn btn-outline-warning">
                            <i class="bi bi-person-fill-lock"></i> แบน</a>
                            <?php } 
                        if($data['user_status']==-1){ ?>
                        <a href="user.php?user_id=<?php echo $data['user_id'] ?>&status=1"  class="btn btn-outline-success">
                            <i class="bi bi-person-fill"></i> ปลดแบน</a>
                        <?php } ?>
                        
                        <a href="user.php?del_id=<?php echo $data['user_id'] ?>"  class="btn btn-danger">
                            <i class="bi bi-person-fill-dash"></i> ลบ</a>
                        
                    </td>
                </tr>
                <?php } ?>
            </table>
            <?php 
                echo '<h5>ข้อมูลจำนวน '.mysqli_num_rows($rs).' รายการ</h5>'
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include'additional/meta.php'; //Tag Meta ทั้งหมด
        include'additional/css.php'; //CSS ทั้งหมด
    ?>

    <title>ระบบการจัดการวัสดุอุปกรณ์และครุภัณฑ์</title>

</head>

<body>
<!---------------------------------------------------------- เนื้อหา -------------------------------------------------------->
<!-- fromlogin -->
    <img src="images/icon/login-icon.jpg" class="img-responsive center-block" alt="Responsive image" style="width:200px;">

    <h3 class="text-center">ระบบการจัดการวัสดุอุปกรณ์และครุภัณฑ์<br>Material handling systems and equipment</br></h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form class="form-horizontal" name="form-login" method="post" action="check_login.php">
                <div class="form-group">
                    <label for="Username" class="col-sm-3 control-label">username</label>
                    <div class="col-sm-9">
                        <input name="txtUsername" placeholder="username" type="text" class="form-control" required pattern="[A-Za-z0-9]{1,20}" minlength="5" maxlength="20" title="กรุณากรอกข้อมูลเป็นภาษาอังกฤษ และตัวเลข 0-9">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-sm-3 control-label">Password</label> 
                    <div class="col-sm-9">
                        <input name="txtPassword" placeholder="password" type="password" class="form-control" required pattern="[A-Za-z0-9]{1,20}" minlength="5" maxlength="20" title="กรุณากรอกข้อมูลเป็นภาษาอังกฤษ และตัวเลข 0-9">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                        <button type="reset" class="btn btn-danger">รีเซ็ต</button>      
                    </div>             
                </div>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
<!---------------------------------------------------------- เนื้อหา -------------------------------------------------------->   

    <?php
        include'additional/script.php'; //Java Script ทั้งหมด
    ?>
</body>
</html>

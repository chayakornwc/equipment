<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include'additional/meta.php'; //Tag Meta ทั้งหมด
        include'additional/css.php'; //CSS ทั้งหมด
        include'../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล
    ?>

    <title>ระบบการจัดการวัสดุอุปกรณ์และครุภัณฑ์</title>

</head>

<body>
    <?php
        include'menu/menu-top.php'; //เมนูด้านบนสุด
    ?>

<!---------------------------------------------------------- เนื้อหา -------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>เพิ่มข้อมูลสมาชิก</h3>

                <form class="form-horizontal" method="post" action="insert/member-int.php">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อ</label>
                        <div class="col-sm-6">
                            <input name="fName" placeholder="ชื่อ" type="text" class="form-control" required pattern="[ก-์]{1,50}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทย">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">นามสกุล</label>
                        <div class="col-sm-6">
                            <input name="lName" placeholder="นามสกุล" type="text" class="form-control" required pattern="[ก-์]{1,50}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทย">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                        <div class="col-sm-6">
                            <input name="mobile" placeholder="เบอร์โทรศัพท์" type="text" class="form-control" pattern="[0-9]{0,10}" maxlength="10" title="กรุณากรอกข้อมูลเป็นตัวเลข 0-9">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-6">
                            <input name="user" placeholder="Username" type="text" class="form-control" required pattern="[A-Za-z0-9]{1,20}" minlength="5" maxlength="20" title="กรุณากรอกข้อมูลเป็นภาษาอังกฤษ และตัวเลข 0-9">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-6">
                            <input name="pass" placeholder="Password" type="password" class="form-control" required pattern="[A-Za-z0-9]{1,20}" minlength="5" maxlength="20" title="กรุณากรอกข้อมูลเป็นภาษาอังกฤษ และตัวเลข 0-9">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ตำแหน่ง</label>
                        <div class="col-sm-6">
                            <select name="status" class="form-control" required>
                                <option value="" hidden>----- เลือกข้อมูล -----</option>
                                <option value="อาจารย์">อาจารย์</option>
                                <option value="นักศึกษา">นักศึกษา</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <button type="reset" class="btn btn-danger">รีเซ็ต</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
<!---------------------------------------------------------- เนื้อหา -------------------------------------------------------->

    <?php
        include'menu/footer.php'; //Footer
        include'additional/script.php'; //Java Script ทั้งหมด
    ?>
</body>
</html>
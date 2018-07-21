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
                <h3>หน้าเบิก/ยืมวัสดุอุปกรณ์แบบคืนและไม่คืน</h3>

                <form class="form-horizontal" method="post" action="insert/d1_int.php">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">รหัสสมาชิก</label> 
                        <div class="col-sm-6">
                            <input name="company_domicile" placeholder="รหัสสมาชิก" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อ-นามสกุล</label> 
                        <div class="col-sm-6">
                            <input name="company_name" placeholder="ชื่อ-นามสกุล" type="text" class="form-control" required pattern="[ก-์]{a-z}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ตำแหน่งหน้าที่</label> 
                        <div class="col-sm-6">
                            <input name="company_name" placeholder="ตำแหน่งหน้าที่" type="text" class="form-control" required pattern="[ก-์]{a-z}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อวัสดุอุปกรณ์</label> 
                        <div class="col-sm-6">
                            <input name="company_name" placeholder="ชื่อวัสดุอุปกรณ์" type="text" class="form-control" required pattern="[ก-์]{a-z}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ตำแหน่งของวัสดุอุปกรณ์</label> 
                        <div class="col-sm-6">
                            <input name="company_domicile" placeholder="ตำแหน่งของวัสดุอุปกรณ์" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">จำนวนที่มี</label>
                        <div class="col-sm-6">
                            <input name="company_phon" placeholder="จำนวนที่มี" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}"  title="กรุณากรอกข้อมูล">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">จำนวนวที่เบิก</label>
                        <div class="col-sm-6">
                            <input name="company_phon" placeholder="จำนวนวที่เบิก" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}"  title="กรุณากรอกข้อมูล">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">วันที่ยืม</label>
                        <div class="col-sm-6">
                            <input name="company_phon" placeholder="วันที่ยืม" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}"  title="กรุณากรอกข้อมูล">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">วันที่คืน</label>
                        <div class="col-sm-6">
                            <input name="company_fax" placeholder="วันที่คืน" type="text" class="form-control"  required pattern="[ก-์]{a-z}[0-9]{0,10}" title="กรุณากรอกข้อมูล">
                        </div>
                    </div>
                   

                    

                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">ยืมแบบส่งคืน</button>
                            <button type="reset" class="btn btn-danger">ยืมแบบไม่ส่งคืน</button>
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
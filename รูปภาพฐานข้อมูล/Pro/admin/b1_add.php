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
                <h3>เพิ่มข้อมูลครุภัณฑ์</h3>

                <form class="form-horizontal" method="post" action="insert/b1_int.php">
                  
                    <div class="form-group">
                        <label class="col-sm-3 control-label">หมายเลขครุภัณฑ์</label>
                        <div class="col-sm-6">
                            <input name="nameber_karu" placeholder="หมายเลขครุภัณฑ์" type="text" class="form-control" required pattern="[ก-์]{a-z}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อครุภัณฑ์</label>
                        <div class="col-sm-6">
                            <input name="name_karu" placeholder="ชื่อครุภัณฑ์" type="text" class="form-control" pattern="[ก-์]{a-z}"  title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-sm-3 control-label">ตำแหน่ง</label>
                        <div class="col-sm-6">
                            <input name="ts_kara" placeholder="ตำแหน่ง" type="text" class="form-control" pattern="[ก-์]{a-z}"  title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ราคา</label>
                        <div class="col-sm-6">
                            <input name="munne_KaRa" placeholder="ราคา" type="text" class="form-control" pattern="[0-9]{0,10}"  title="กรุณากรอกข้อมูลเป็นตัวเลข 0-9">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">จำนวน</label>
                        <div class="col-sm-6">
                            <input name="member_Karu" placeholder="จำนวน" type="text" class="form-control" pattern="[0-9]{0,10}"  title="กรุณากรอกข้อมูลเป็นตัวเลข 0-9">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อบริษัท/ห้าง/ร้าน</label> 
                        <div class="col-sm-6">
                            <input name="company_name" placeholder="ชื่อบริษัท/ห้าง/ร้าน" type="text" class="form-control" required pattern="[ก-์]{a-z}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ที่อยู่บริษัท/ห้าง/ร้าน</label> 
                        <div class="col-sm-6">
                            <input name="company_domicile" placeholder="ที่อยู่บริษัท/ห้าง/ร้าน" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">เบอร์โทรบริษัท/ห้าง/ร้าน</label>
                        <div class="col-sm-6">
                            <input name="company_phon" placeholder="เบอร์โทรบริษัท/ห้าง/ร้าน" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}"  title="กรุณากรอกข้อมูล">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">เบอร์แฟกซ์</label>
                        <div class="col-sm-6">
                            <input name="company_fax" placeholder="เบอร์แฟกซ์" type="text" class="form-control"  required pattern="[ก-์]{a-z}[0-9]{0,10}" title="กรุณากรอกข้อมูล">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">อีเมล</label> 
                        <div class="col-sm-6">
                            <input name="company_email" placeholder="อีเมล" type="text" class="form-control" required pattern="{a-z}[0-9]{0,10}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูลเป็นภาษาอังกฤษ">
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
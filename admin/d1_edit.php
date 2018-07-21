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
                <h3>แก้ไขข้อมูลวัสดุอุปกรณ์</h3>
				<?php 
					
                $id= $_GET['id'];
					$sql = "SELECT * FROM  company where id_company='$id'";
                    $result = $conn->query($sql);
                   $row = $result->fetch_assoc();
				?>
                <form class="form-horizontal" method="post" action="update/d1_up.php?id=<?=$id?>">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อ</label>
                        <div class="col-sm-6">
                            <input name="company_name" placeholder="ชื่อ" type="text" class="form-control" required pattern="[ก-์]{a-z}[0-9]{0,10}" minlength="1" maxlength="50" title="กรุณากรอกข้อมูล" 
                            value="<?=$row['name_company']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ที่อยู่</label>
                        <div class="col-sm-6">
                            <input name="company_domicile" placeholder="ที่อยู่" type="text" class="form-control" pattern="[ก-์]{a-z}[0-9]{0,10}"  title="กรุณากรอกข้อมูล" 
                            value="<?=$row['domicile_company']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">เบอร์โทร</label>
                        <div class="col-sm-6">
                            <input name="company_phon" placeholder="เบอร์โทร" type="text" class="form-control" pattern="[0-9]{0,10}[ก-์]{a-z}"  title="กรุณากรอกข้อมูล" 
                            value="<?=$row['phon_company']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">เบอร์แฟกซ์</label>
                        <div class="col-sm-6">
                            <input name="company_fax" placeholder="เบอร์แฟกซ์" type="text" class="form-control" pattern="[0-9]{0,10}[ก-์]{a-z}"  title="กรุณากรอกข้อมูล" 
                            value="<?=$row['fax_company']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">อีเมล</label>
                        <div class="col-sm-6">
                            <input name="company_email" placeholder="อีเมล" type="text" class="form-control" pattern="[0-9]{0,10}[ก-์]{a-z}"  title="กรุณากรอกข้อมูล" 
                            value="<?=$row['email_company']?>">
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
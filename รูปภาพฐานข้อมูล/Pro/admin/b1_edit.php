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
					$sql = "SELECT * FROM  dura where id='$id'";
                    $result = $conn->query($sql);
                   $row = $result->fetch_assoc();
				?>
                <form class="form-horizontal" method="post" action="update/b1_up.php?id=<?=$id?>">
                    
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">หมายเลขครุภัณฑ์</label>
                        <div class="col-sm-6">
                            <input name="nember" placeholder="หมายเลขครุภัณฑ์" type="text" class="form-control" pattern="[0-9]{0,10}"  title="กรุณากรอกข้อมูลเป็นตัวเลข 0-9" 
                            value="<?=$row['id_karu']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อครุภัณฑ์</label>
                        <div class="col-sm-6">
                            <input name="name" placeholder="ชื่อครุภัณฑ์" type="text" class="form-control" pattern="[ก-์]{a-z}"  title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ" 
                            value="<?=$row['name_karu']?>">
                        </div>
                    </div>

                    
					<div class="form-group">
                        <label class="col-sm-3 control-label">ตำแหน่ง</label>
                        <div class="col-sm-6">
                            <input name="pos" placeholder="ตำแหน่ง" type="text" class="form-control" pattern="[ก-์]{a-z}"  title="กรุณากรอกข้อมูลเป็นภาษาไทยหรือภาษาอังกฤษ" 
                            value="<?=$row['pos_karu']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">ราคา</label>
                        <div class="col-sm-6">
                            <input name="price" placeholder="ราคา" type="text" class="form-control" pattern="[0-9]{0,10}"  title="กรุณากรอกข้อมูลเป็นตัวเลข 0-9" 
                            value="<?=$row['price_karu']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">จำนวน</label>
                        <div class="col-sm-6">
                            <input name="member" placeholder="จำนวน" type="text" class="form-control" pattern="[0-9]{0,10}"  title="กรุณากรอกข้อมูลเป็นตัวเลข 0-9" 
                            value="<?=$row['member_karu']?>">
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
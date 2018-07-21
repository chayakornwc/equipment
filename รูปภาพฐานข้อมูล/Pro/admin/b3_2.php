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


            <div class="col-lg-3">
                <div class="text-center">
                    <div class=" center"><h3>MENU</h3></div> 
                        <ul class="navLeft orengeLight ">
                            <li><a href="b1.php" >หน้าหลัก </a></li>
                            <li><a href="b3_1.php" >ศูนย์คอมพิวเตอร์ ชั้นที่ 1</a></li>
                            <li><a href="b3_3.php" >ศูนย์คอมพิวเตอร์ ชั้นที่ 3</a></li>
                            <li><a href="b3_4.php" >ศูนย์คอมพิวเตอร์ ชั้นที่ 4</a></li>
                            <li><a href="b3_5.php" >ศูนย์คอมพิวเตอร์ ชั้นที่ 5</a></li>
                            
                        </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <h3>ศูนย์คอมพิวเตอร์ LPRU ชั้นที่ 2</h3> 
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ห้อง  </a>   
                </div>
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ห้อง </a>   
                </div>
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ห้อง </a>   
                </div>
            </div>
            <div class="col-lg-9">
                <h3></h3> 
                 <div class="col-lg-3">
                    <a class="btn btn-success" href="b1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ห้อง </a>   
                </div>
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ห้อง </a>   
                </div>
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



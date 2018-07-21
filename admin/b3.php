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


            <div class="col-lg-2">
                <div class="text-center">
                    <div class=" center"><h3>MENU</h3></div> 
                        <ul class="navLeft orengeLight ">
                            <li><a href="b1.php" >หน้าข้อมูลครุภัณ์</a></li>
                            <li><a href="b2.php" >รายงานการแจ้งซ้อม</a></li>
                            <li><a href="#" >ระบบออกรายงาน </a></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <h3>ตำแหน่งของครุภัณ์</h3> 
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b3_1.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ศูนย์คอมพิวเตอร์ LPRU ชั้นที่ 1 </a>   
                </div>
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b3_2.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ศูนย์คอมพิวเตอร์ LPRU ชั้นที่ 2</a>   
                </div>
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b3_3.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ศูนย์คอมพิวเตอร์ LPRU ชั้นที่ 3</a>   
                </div>
            </div>
            <div class="col-lg-10">
                <h3></h3> 
                 <div class="col-lg-3">
                    <a class="btn btn-success" href="b3_4.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ศูนย์คอมพิวเตอร์ LPRU ชั้นที่ 4</a>   
                </div>
                <div class="col-lg-3">
                    <a class="btn btn-success" href="b3_5.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ศูนย์คอมพิวเตอร์ LPRU ชั้นที่ 5</a>   
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



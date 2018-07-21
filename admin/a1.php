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
                            <li><a href="a12.php" >รายการยืมแล้วส่งคืน</a></li>
                            <li><a href="a13.php" >รายยืมแล้วไม่ส่งคืน</a></li>
                            <li><a href="a14.php" >อุปกรณ์ที่ยังไม่ส่งคืน</a></li>
                            <li><a href="a15.php">อุปกรณ์ใกล้จะหมด</a></li>
                            <li><a href="#">รายการที่เบิก/ยืม</a></li>
                            <li><a href="#">รายการคืนวัสดุ</a></li>
                            <li><a href="#" >ระบบออกรายงาน </a></li>
                        </ul>
                </div>
            </div>
    
            <div class="col-lg-10">
                <h3>ข้อมูลวัสดุอุปกรณ์
                    <div class="form-group pull-right">
                        <a class="btn btn-success" href="a1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>เพิ่มข้อมูลวัสดุอุปกรณ์</a>
                    </div>
                </h3>

                <table id="data-table" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th class="text-center">#</th>
                            <th class="text-center">ชื่อวัสดุอุปกรณ์</th>
                            <th class="text-center">ตำแหน่ง</th>
                            <th class="text-center">ราคา</th>
                            <th class="text-center">จำนวน</th>
                            <th class="text-center">ลักษณะ</th>
                            <th class="text-center">บริษัทห้างร้าน</th>
                            <th class="text-center">แก้ไข</th>
                            <th class="text-center">ยืม</th>
                            <th class="text-center">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>  
                        <?php
                            $sql = "SELECT * FROM op  ORDER BY id DESC ";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center"><?=$row["name"]?></td>
                            <td class="text-center"><?=$row["pos"]?></td>
                            <td class="text-center"><?=$row["price"]?>  บาท</td>
                            <td class="text-center"><?=$row["number_op"];?></td>
                            <td class="text-center"><?=$row["look"];?></td>                       
                            <td class="text-center"><?=$row["name_company"];?></td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="a1_edit.php?id=<?=$row["id"]?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> แก้ไข</a>
                            </td>
                            
                            <td class="text-center">
                                <a class="btn btn-danger" href="delete/a1-del.php?id=<?=$row["id"]?>" role="button" onclick="return confirm('ท่านต้องการลบข้อมูลหรือไม่ !')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ลบ</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                                            </tbody>
                </table>

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


<script type="text/javascript">
    $(document).ready(function() {
        var t = $('#data-table').DataTable( {
            "columnDefs": [ 
                {"searchable": false, "orderable": false, "targets": 0 },
                {"searchable": false, "orderable": true, "targets": 2 },
                {"searchable": false, "orderable": true, "targets": 3 },
                {"searchable": false, "orderable": false, "targets": 4 },
                {"searchable": false, "orderable": false, "targets": 5 }
            ],
            "order": [[ 1, 'asc' ]],
            "oLanguage": {
                "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                "sZeroRecords": "ไม่พบข้อมูล",
                "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                "sSearch": "ค้นหา :",
                "oPaginate": {
                    "sFirst":    "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext":     "ถัดไป",
                    "sLast":     "หน้าสุดท้าย"
                }
            }
        });
     
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        }).draw();
    });
</script>
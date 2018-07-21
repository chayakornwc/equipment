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
                            <li><a href="b3.php" >ตำแหน่งของครุภัณ์</a></li>
                            <li><a href="#" >ระบบออกรายงาน </a></li>
                        </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <h3>รายงานการแจ้งซ้อม
                <div class="form-group pull-right">
                    <a class="btn btn-success" href="b1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มข้อมูครุภัณฑ์</a>
                </div>
                </h3>

                <table id="data-table" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th class="text-center">ลำดับ</th>
                            <th class="text-center">หมายเลขครุภัณฑ์</th>
                            <th class="text-center">ชื่อครุภัณฑ์</th>
                            <th class="text-center">วันที่แจ้งซ้อม</th>
                            <th class="text-center">คนแจ้งซ้อม</th>
                            <th class="text-center">หมายเหตุแจ้งซ้อม</th>
                            <th class="text-center">ค้นหาตำแหน่ง</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM dura INNER JOIN company ON dura.ID_STay = company.id_STay  ";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                        ?>

                       
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center"><?=$row["id_karu"]?></td>
                            <td class="text-center"><?=$row["name_karu"]?></td>
                            <td class="text-center"><?=$row["pos_karu"]?></td>
                            <td class="text-center"><?=$row["price_karu"]?></td>
                            <td class="text-center"><?=$row["price_karu"]?></td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="b2_1.php?id=<?=$row["id"]?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>ค้นหา</a>
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
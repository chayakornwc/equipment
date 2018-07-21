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
                <h3>ข้อมูลบริษัท/ห้าง/ร้าน 
                <div class="form-group pull-right">
                    <a class="btn btn-success" href="d1_add.php" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่ม</a>
                </div>
                </h3>

                <table id="data-table" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th class="text-center">#</th>
                            <th class="text-center">ชื่อ</th>
                            <th class="text-center">ที่อยู่</th>
                            <th class="text-center">เบอร์โทร</th>
                            <th class="text-center">เบอร์แฟกซ์</th>
                            <th class="text-center">อีเมล</th>
                            <th class="text-center">แก้ไข</th>
                            <th class="text-center">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM company ";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-left"><?=$row["name_company"]?></td>
                            <td class="text-center"><?=$row["domicile_company"]?></td>
                            <td class="text-center"><?=$row["phon_company"]?></td>
                            <td class="text-center"><?=$row["fax_company"];?></td>
                            <td class="text-center"><?=$row["email_company"];?></td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="d1_edit.php?id=<?=$row["id_company"]?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> แก้ไข</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="delete/d1_del.php?id=<?=$row["id_company"]?>" role="button" onclick="return confirm('ท่านต้องการลบข้อมูลหรือไม่ !')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> ลบ</a>
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
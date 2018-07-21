<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
            <ul class="nav navbar-nav">
                
                <li><a href="a1.php">ข้อมูลวัสดุอุปกรณ์</a></li>
                <li><a href="b1.php">ข้อมูลครุภัณฑ์</a></li>
                <li><a href="member.php">ข้อมูลสมาชิก</a></li>
                <li><a href="d1.php">ข้อมูลบริษัท/ห้าง/ร้าน</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php
                            $sql = "SELECT * FROM member";
                            $result = $conn->query($sql);
                            $result->num_rows;
                            $row = $result->fetch_assoc();
                            echo $row["firstname_Mb"]." ".$row["lastname_Mb"];
                        ?> 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../check_out.php">ออกจากระบบ</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
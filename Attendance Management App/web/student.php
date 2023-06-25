<!-- <?php require_once "web/header.php"; ?> -->

<html>
    <body>
            <div class="container" style="margin-top:20px;">
            <a class="btn btn-primary" href="index.php?action=student-add">
                <img src="web/image/icon-add.png" alt="">
                Add Student
            </a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><strong>Student Name</strong></th>
                            <th><strong>Roll Number</strong></th>
                            <th><strong>Date of Birth</strong></th>
                            <th><strong>Class</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if(!empty($result)) {
                            // echo "<pre>";
                            // print_r($result);

                            foreach($result as $k => $v) {
                                // echo "<pre>";
                                // print_r($v);
                        ?>
                        <tr class="success">
                            <td>
                                <?php
                                echo $result[$k]["name"];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $result[$k]["roll_number"];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $result[$k]["dob"];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $result[$k]["class"];
                                ?>
                            </td>
                            <td>
                                <a class="btnEditAction" href="index.php?action=student-edit&id=<?php echo $result[$k]["id"];?>">
                                <img src="web/image/icon-edit.png" />
                                </a>
                                <a class="btnDeleteAction" href="index.php?action=student-delete&id=<?php echo $result[$k]["id"]; ?>"
                                onclick="return del();">
                                <img src="web/image/icon-delete.png" />
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script type="type/javascript">
            function del()
            {
                var ans=confirm("Are You Sure You Want to Delete !!");
                if(ans == true)
                {
                    return true;
                }
                else
                {
                    return false;
                }
                return false;
            }
        </script>
    </body>
</html>

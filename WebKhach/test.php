<?php
    echo "abc";
    // session_start();
    // session_destroy();
    require("./dbconfig.php");
    $a = "0394561950";
    $result_set = mysqli_query($links,"select * from khachhang where sdt='".$a."'");
    if(mysqli_num_rows($result_set)==0)
    {
        echo "chuaco";
    }
?>
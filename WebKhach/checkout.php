<?php
    require("./dbconfig.php");
    session_start();

    if(isset($_POST['dathang']))
    {
        $hoten = $_POST['tHoten'];
        $diachi = $_POST['tDiachi'];
        $sdt = $_POST['tSdt'];
        $ngaydat = $_POST['tNgaydat'];
        $ngaynhan = $_POST['tNgaynhan'];
        $dathang = mysqli_query($links,"insert into hoadon values(NULL,'$hoten','$diachi','$sdt','$ngaydat','$ngaynhan','1')");
        $sl = $_POST['sl'];
        $mahd = mysqli_insert_id($links);
        for($i=1;$i<=$sl;$i++)
        {
            $masp = $_POST['masp_'.$i];
            $soluong = $_POST['soluong_'.$i];
            $gia = $_POST['gia_'.$i];
            $cthoadon = mysqli_query($links,"insert into chitiethoadon values(NULL,'$mahd','$masp','$soluong','$gia')");
        }
        $kiemtra = mysqli_query($links,"select * from khachhang where sdt='$sdt'");
        if(mysqli_num_rows($kiemtra)==0)
        {
            $khachhang = mysqli_query($links,"insert into khachhang values(NULL,'$hoten','$sdt',NULL,'$diachi')");
        }
    }
    header('location: cart.php?act=thanhcong');
?>

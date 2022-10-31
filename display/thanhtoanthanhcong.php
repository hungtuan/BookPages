<div class="motopress-wrapper content-holder clearfix woocommerce" id="duong_sang">
<?php
    if((isset($_REQUEST['tendangnhap']))&&(isset($_REQUEST['soxu']))&&(isset($_REQUEST['mathanhtoan'])))
    {
        $tendangnhap=$_REQUEST['tendangnhap'];
        $soxu=$_REQUEST['soxu'];
        $mathanhtoan=$_REQUEST['mathanhtoan'];
        echo $tendangnhap;
        echo $soxu;
        echo $mathanhtoan;
        $sql="update naptien set trangthai=1 where mathanhtoan='$mathanhtoan'";
        $db->query($sql);
        echo "Bạn đã nạp tiền thành công cho tài khoản $tendangnhap với số xu là $soxu";

     }

?>
</div>
	
	

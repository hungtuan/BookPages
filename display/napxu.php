<div class="motopress-wrapper content-holder clearfix woocommerce" id="duong_sang">
<div class="container">
<div class="row">
<?php
    if(isset($_REQUEST['tendangnhap']))
    {

 $masp=$_REQUEST['tendangnhap'];
        $sanpham="select * from khachhang where tendangnhap='$masp'";
         $sp1 = $db->query($sanpham);
         $sp=$sp1->fetch();

?>


<div class="khung_nap_tien" style="width: 80%; margin:0 auto;margin-top:50px; margin-bottom: 50px;box-shadow: 0 0 5px 5px #3552A4; border-radius: 5px;padding: 30px;">
    <h1 style="text-align: center;">Vui lòng chọn giá trị nạp xu.</h1>
    <span style="margin-left: 250px;margin-top: 50px;">Tài khoản: <?php echo $_SESSION['tendangnhap'];?></span>
    <style type="text/css">
        td
{
    width: 150px;
}
table
{
    margin: 0 auto;
    text-align: center;
    margin-top: 30px;
}
    </style>
    <table>
        <tr>
            <td>Số tiền</td>
            <td>Số xu</td>

        </tr>
        <tr>
            <?php
               if (($_SERVER["REQUEST_METHOD"]=='POST')&&(isset($_POST['nap10xu'])))
               {                     
                        $sotien=10;
                        $len = 10;
                        $mathanhtoan = substr(md5(rand()), 0, $len);
                        $sql="insert into naptien values('$masp',$sotien,CURDATE(),'$mathanhtoan',0)";
                        $db->query($sql);
                        $url="http://localhost:8080/project1/index.php?thanhcong=$mathanhtoan";
                        header("location:https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+$mathanhtoan&product_price=10000&product_quantity=1&total_amount=10000&url_cancel=&url_detail=&url_success=$url");
               }
             ?>
  <form action="" method="post">            
            <td>10000 VNĐ</td>
            <td>10 Xu</td>
            <td>
                <button type="submit" name="nap10xu">
                <a  href="https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+$mathanhtoan&product_price=10000&product_quantity=1&total_amount=10000&url_cancel=&url_detail=&url_success=$url"><img src="./images/muahang-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a></button></td>
        </form>
        </tr>
        <tr>

 <form action="" method="post"> 
            <td>20000 VNĐ</td>
            <td>20 Xu</td>
            <td><a href="https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+s%C3%A1ch+20000&product_price=20000&product_quantity=1&total_amount=20000&url_cancel=&url_detail=&url_success="><img src="./images/muahang-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a></td>
        </form>
        </tr>
        <tr>
 <form action="" method="post"> 
            <td>50000 VNĐ</td>
            <td>55 Xu (Thêm 10%)</td>
            <td><a href="https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+50000&product_price=50000&product_quantity=&total_amount=50000&url_cancel=&url_detail=&url_success="><img src="./images/muahang-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a></td>
        </form>
        </tr>
        <tr>
 <form action="" method="post"> 
            <td>100000 VNĐ</td>
            <td>110 Xu (Thêm 10%)</td>
            <td><a href="https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+s%C3%A1ch+100000&product_price=100000&product_quantity=1&total_amount=100000&url_cancel=&url_detail=&url_success="><img src="./images/muahang-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a></td>
</form>
        </tr>
        <tr>
 <form action="" method="post"> 
            <td>200000 VNĐ</td>
            <td>220 Xu (Thêm 10%)</td>
            <td><a href="https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+200000&product_price=200000&product_quantity=1&total_amount=200000&url_cancel=&url_detail=&url_success="><img src="./images/muahang-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a></td>
        </form>
        </tr>
        <tr>
 <form action="" method="post"> 
            <td>500000 VNĐ</td>
            <td>550 Xu (Thêm 10%)</td>
            <td><a href="https://www.baokim.vn/payment/product/version11?business=t36.duongthaisang%40gmail.com&id=&order_description=&product_name=Thanh+to%C3%A1n+500000&product_price=500000&product_quantity=1&total_amount=500000&url_cancel=&url_detail=&url_success="><img src="./images/muahang-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a></td>
        </form>
        </tr>
    </table>





         <?php

    }
        ?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
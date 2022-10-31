<div class="motopress-wrapper content-holder clearfix woocommerce" id="duong_sang">
<div class="container">
<div class="row">
<?php
    if(isset($_REQUEST['tendangnhap']))
    {
        $masp=$_REQUEST['tendangnhap'];
        $masp = strip_tags($masp);
        $masp = addslashes($masp);
        $sanpham="select * from khachhang where tendangnhap='$masp'";
         $sp1 = $db->query($sanpham);
         $sp=$sp1->fetch();

?>
    
<div class="span12" >
        <section class="title-section">
    <h1 class="title-header" style="font-size: 2.5em;">
Thông tin cá nhân</h1> 
        </section> 
    </div>
</div>

<div class="row">
    <div class="thong_tin_ca_nhan" style="border-radius: 3px;
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.1); padding: 30px 50px;width: 800px;margin: 0 auto;margin-bottom: 50px;margin-top: 20px;">
    <div class="avatar" style="float: left;">

        <img style="width: 200px; height: 200px; margin-left: 20px; border-radius: 3px;
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.1); border: 5px solid white" src="./images/source/<?php echo $sp[9]?>"/>
    <br>
         <div class="controls">
         <input type="file" name="link_epub"/>
         </div>
    <br><br>

    <br><br>

</div>
    
    <div class="du_lieu_nguoi_dung" style="margin-left: 30px;float: left;">   
    <p style="font-size: 1.2em;font-weight: bold;"><?php echo $sp[0]?><br><br></p>
    <style type="text/css">
        td
        {
            width: 150px;
            height: 50px;
        }
    </style>
    <h2>Thông tin cơ bản</h2>
    <table>
        <tr>
            <td>Họ tên:</td>
            <td>
                <input style="height: 30px;border-radius: 5px;" type="text" class="span3" name="hoten" value="<?php echo $sp[3]?>"/> 
            </td>
            
        </tr>
        <tr>
            <td>Mail:</td>   
            <td>                <input style="height: 30px;border-radius: 5px;" type="text" class="span3" name="hoten" value="<?php echo $sp[2]?>"/> </td>
        </tr>
        <tr>
            <td>Ngày tạo:</td>
            <td><?php echo $sp[7]?></td>
        </tr>
    </table>
    <h2>Thông tin liên hệ</h2>

    <table>
        <tr>
            <td>Địa chỉ:</td>
            <td>                <input style="height: 30px;border-radius: 5px;" type="text" class="span3" name="hoten" value="<?php echo $sp[4]?>"/> </td>
            
        </tr>
        <tr>
            <td>Số điện thoại:</td>   
            <td>                <input style="height: 30px;border-radius: 5px;" type="text" class="span3" name="hoten" value="<?php echo $sp[5]?>"/> </td>
        </tr>

    </table>   
    </div>        


         <?php

    }
        ?>

        <div class="clearfix"></div>
        <a href="index.php?page=account&tendangnhap=<?php echo $sp[0]?>">
<input type="submit" name="chap_nhan_thay_doi" value="Lưu thay đổi" style="padding: 10px 20px;margin-left: 250px;margin-top: 50px;background-color: #3552A4;border-radius: 7px">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
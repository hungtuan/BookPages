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
    
<div class="span12" >
        <section class="title-section">
    <h1 class="title-header" style="font-size: 2.5em;">
Thông tin cá nhân</h1> 
        </section> 
    </div>
</div>

<div class="row">
    <?php
    if(($_SESSION['login_member']=='ok') &&($_SESSION['tendangnhap']==$masp))
    {
        echo '
<style type="text/css">
    .an_hien
    {
        display: block;
    }
</style>
        ';
    }
    else
    {
        echo '
<style type="text/css">
    .an_hien
    {
        display: none;
    }
</style>
        ';
    }
    ?>
    <div class="thong_tin_ca_nhan" style="border-radius: 3px;
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.1); padding: 30px 50px;width: 800px;margin: 0 auto;margin-bottom: 50px;margin-top: 20px;">
    <div class="avatar" style="float: left;">

        <img style="width: 200px; height: 200px; margin-left: 20px; border-radius: 3px;
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.1); border: 5px solid white" src="./images/source/<?php echo $sp[9]?>"/>
    <br><br>
    <span style="text-align: center;" class="an_hien">Số xu: <?php echo $sp[8]?> <i class="fab fa-bitcoin" style="width: 50px"></i></span> <a href="index.php?page=napxu&tendangnhap=<?php echo $sp[0]?>" class="an_hien"><button style="padding: 5px 10px;border-radius: 7px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);background-color: #3552A4;margin-left: 90px;margin-top: 20px;">Mua xu</button></a>
    <br><br>
    
    <div style="width: 305px;border: 1px solid #3552A4;padding: 5px; border-radius: 5px;">
    <span style="text-align: center;font-weight: bold;">Những sách đã mua: </span><br>
    <?php
        if(isset($_REQUEST['tendangnhap']))
            {
                $tdn=$_REQUEST['tendangnhap'];                    
                $query1="SELECT * FROM donhang JOIN khachhang on donhang.tendangnhap=khachhang.tendangnhap JOIN sach ON donhang.masach=sach.masach WHERE donhang.tendangnhap='$tdn'";
                $dong=$db->query($query1);
                 foreach ($dong as $d)
                {
                    echo "
                    <a href='index.php?page=sanphamct&masp=".$d[2]."'>
                       <span>- $d[17]<br></span>
                       </a>
                        ";
                    }
            }


    ?>
    <button style="padding: 5px 10px;float: right;border: none;" onclick="document.getElementById('id02').style.display='block'" >Xem tất cả </button>
    </div>

    <div id="id02" class="modal" style="z-index: 100;">
        <style type="text/css">
            form img
            {
                width: 50px;
                height: 80px;
                float: left;
            }

        </style>
  <form class="modal-content" action="" method="post" style="padding:0 0 30px 30px;width: 500px;">

          <br><br>
    <?php
        if(isset($_REQUEST['tendangnhap']))
            {
                $tdn=$_REQUEST['tendangnhap'];                    
                $query1="SELECT * FROM donhang JOIN khachhang on donhang.tendangnhap=khachhang.tendangnhap JOIN sach ON donhang.masach=sach.masach WHERE donhang.tendangnhap='$tdn'";
                $dong=$db->query($query1);
                 foreach ($dong as $d)
                {
                    echo "
                    <a href='index.php?page=sanphamct&masp=".$d[2]."'><br>
                    <img src='./images/product/$d[21]'
                       <span>$d[17]<br></span>
                       </a>

                       <div class='clearfix'></div>
                        ";
                    }
            }


    ?>

</form>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>
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
            <td><?php echo $sp[3]?></td>
            
        </tr>
        <tr>
            <td>Mail:</td>   
            <td><?php echo $sp[2]?></td>
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
            <td><?php echo $sp[4]?></td>
            
        </tr>
        <tr>
            <td>Số điện thoại:</td>   
            <td><?php echo $sp[5]?></td>
        </tr>

    </table>   
    </div>        


         <?php

    }
        ?>

        <div class="clearfix"></div>
        <a href="index.php?page=changeinfo&tendangnhap=<?php echo $sp[0]?>">
<input class="an_hien" type="submit" name="thaydoithongtin" value="Thay đổi thông tin" style="padding: 10px 20px;margin-left: 70px;margin-top: 20px;background-color: #3552A4;border-radius: 7px"></a>
<input class="an_hien" type="submit" name="doimatkhau" value="Đổi mật khẩu" style="padding: 10px 20px;margin-left: 420px;margin-top: -38px;background-color: #3552A4;border-radius: 7px">
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
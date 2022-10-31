<?php
ob_start();
 session_start();

    include './admin/includes/connect.php';
include("display/header.php");
include("display/page-content.php");
        
?>


<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
<div id="slider-wrapper" class="slider">
<div class="container">

</div>
</div> 
</div>
</div>
<?php
        if(isset($_REQUEST['page']))
        {
           $page=$_REQUEST['page'];
           switch ($page)
           {
               case "tintuc":
                   include 'display/tintuc.php';
                   break;
               case "tintucct":
                   include 'display/tintucct.php';
                   break;
               case "sanpham";
                   include 'display/sanpham.php';
                   break;
                             case "sanphambanchaynhat";
                   include 'display/sanphambanchaynhat.php';
                   break;
                                 case "sanphammienphi";
                   include 'display/sanphammienphi.php';
                   break;
               case "sanphamct";
                   include 'display/sanphamct.php';
                   break;
               case "download";
                   include 'display/download.php';
                   break;
               case "download2";
                   include 'display/download2.php';
                   break;
               case "thanhcong";
                   include 'display/thanhtoanthanhcong.php';
                   break;
               case "danhmucchinh";
                   include 'display/danhmucchinh.php';
                   break;
               case "register";
                   include 'display/register.php';
                   break;
               case "napxu";
                   include 'display/napxu.php';
                   break;
                             case "thanhcong";
                   include 'display/thanhcong.php';
                   break;
               case "account";
                   include 'display/account.php';
                   break;
               case "login";
                   include 'display/login.php';
                   break;
               case "timkiem";
                   include 'display/timkiem.php';
                   break;
               case "logout";
                   include 'display/logout.php';
                   break;
                 case 'changeinfo';
                   include "display/changeinfo.php";
                            break;     
              }
        }

        else
      if(isset($_REQUEST['thanhcong']))
        {
           $mathanhtoan=$_REQUEST['thanhcong'];

 
           $sql2="select tendangnhap,soxu from naptien where mathanhtoan='$mathanhtoan' and trangthai=0";
          
           $kq=$db->query($sql2);   
           $row=$kq->fetch();  
          $sql3="update khachhang set xu=xu+$row[1] where tendangnhap='$row[0]'";
          $db->query($sql3);
          $sql="update naptien set trangthai=1 where mathanhtoan='$mathanhtoan'";
           $db->query($sql);  
        echo '<script type="text/javascript"> 
              alert("Nạp tiền thành công.")
              </script>';
        
        }       
         else
        {
            include 'display/center.php';
        }
       ?>
   
<?php
	include 'display/footer.php';
?>
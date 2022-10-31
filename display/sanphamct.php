<div class="motopress-wrapper content-holder clearfix woocommerce" id="duong_sang">
<div class="container">
<div class="row">
<script type="text/javascript">
    function check()
    {
        return confirm("Bạn có chắc muốn mua sách này.");
    }
</script>
<?php
    if(isset($_REQUEST['masp']))
    {
        $masp=$_REQUEST['masp'];
                        $masp = strip_tags($masp);
                        $masp = addslashes($masp);  
        $sanpham="select * from sach join danhmucchitiet on sach.madmct=danhmucchitiet.madmct where masach=$masp";
         $sp1 = $db->query($sanpham);
         $sp=$sp1->fetch();
         $tensach=substr($sp[5],0,-4);

    $id=$_POST['doc_online_button'];
    echo $id;
    $query="UPDATE sach set soluongdoc=soluongdoc+1 where masach=$masp";
    $sp1 = $db->query($query);

?>
<?php
            if ((isset($_POST['nguoimua']))&&(isset($_POST['sachduocmua'])))
            {
                $nguoimua=$_POST['nguoimua'];
                $sachduocmua=$_POST['sachduocmua'];
                $giasach=$_POST['giatien'];
                $soxu=$giasach/1000;
                $sql="insert into donhang(tendangnhap,masach,dongia,ngaytao) values('$nguoimua','$sachduocmua','$giasach',CURDATE()) ";
                $sp9 = $db->query($sql);
                $sql2="update khachhang set xu=xu-$soxu where tendangnhap='$nguoimua'";
                $sp8 = $db->query($sql2);
            } 
?>
<div class="span12" >
        <section class="title-section">
    <h1 class="title-header" style="font-size: 1.5em;">
    <?php echo $sp[2]?> </h1>

    <ul class="breadcrumb breadcrumb__t" style="font-size: 1em;margin-top: 1em;margin-bottom: 1em;">
        <a class="home" href="index.php">Trang chủ
        </a> / <a href="index.php?page=sanpham&madm=<?php echo $sp[1]?>"><?php echo $sp[14]?></a> / <?php echo $sp[2]?>
    </ul>  
        </section> 
    </div>
</div>
<div class="row">
<div class="span9">
    
    
    <div class="post-1954 product type-product status-publish hentry featured instock">
    <div class="images" style="margin-left: 50px; margin-top: 30px;">
    <a href=""  class="hinh_anh_san_pham" >
        <img style="width: 300px; height: 350px; margin-left: 70px; border-radius: 3px;
    box-shadow: 0 0 25px 25px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $sp[6]?>" class="attachment-shop_single wp-post-image"/>
    </a>

    </div>
<div class="summary entry-summary" style="margin-left: -30px;">
    
    <p itemprop="price" class="price">
        <span class="tieu_de_sach" style="font-size: 2em;color:#3552A4"><?php echo $sp[2]?></span><br><br>
    </p>
   
    <div>
        <span style="font-size: 15px"> Tác giả: <?php echo $sp[7]?></span><br><br>
        <span style="font-size: 15px">Năm xuất bản: <?php echo $sp[8]?></span> <br><br>
        <span style="font-size: 15px">Thể loại: <a href="index.php?page=sanpham&madm=<?php echo $sp[1]?>" style="font-size: 15px;color: #3552A4"><?php echo $sp[14]?></a></span> <br><br>
        <span style="font-size: 15px">Lượt xem: <?php echo $sp[9]?></span> <br><br>
        <span style="font-size: 15px">Lượt tải: <?php echo $sp[10]?></span> <br><br>
<div class="fb-like" data-href="http://localhost:8080/project1/index.php?page=sanphamct&masp=<?php echo $sp[0]?>" data-width="100" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<div>
                <h4 style="color: #3552A4" class="gia_ca_free1"><b>FREE</b></h4>
                <h4 style="color: #3552A4" class="gia_ca_co1">Giá: <?php echo number_format($sp[3]) ?><b>   VNĐ</b></h4>       
                <?php 
                if((number_format($sp[3]))==0)
                {
                    echo '
        <style type="text/css">
                    .gia_ca_free1
                    {
                        display: block;
                    }
                    .gia_ca_co1
                    {
                        display: none;
                    }
                </style> 
                    ';
                }
                else
                {
                    echo '
        <style type="text/css">
                    .gia_ca_free1
                    {
                        display: none;
                    }
                    .gia_ca_co1
                    {
                        display: block;
                    }
                </style> 
                    ';
                }
                ?>
                <br>
<div  class="mua_ban_sach">
        <form action="" method="post"">
        <div id="doc_online" >
            <button style="font-size: 2em;border: 1px solid #EC971F;background-color: #EC971F;width: 200px;padding: 5px 18px;border-radius: 12px;" name="doc_online_button"><a href="./ebook/epub/<?php echo $sp[4]?>"id="doc_online" target="_blank" type="button" style="color:white;">Đọc Epub</a></button>
    
             <button style="font-size: 2em;border: 1px solid #EC971F;background-color: #EC971F;width: 200px;padding: 5px 18px;border-radius: 12px;" name="doc_online_button"><a href="./read/<?php echo $tensach; ?>"id="doc_online" target="_blank" type="button" style="color:white;">Flip Book</a></button>           
          

        </div>
     <br>
        <div id="tai_epub_pdf">
            <a href="index.php?page=download&masach=<?php echo $sp[0]?>" id="download_Epub" style="background-color: #286090; padding: 10px 15px;margin-right: 20px;border-radius: 3px; color: white;margin-left: 20px;">EPUB</a>
            <a href="index.php?page=download2&masach=<?php echo $sp[0]?>" id="download_Epub" style="background-color: #C9302C; padding: 10px 15px;margin-right: 30px;border-radius: 3px; color: white;">PDF</a>
        </div>  
        </form> 
    <br>
        <div id="canh_bao_doc_online" style="color: #337AB7;border: 1px solid #337AB7;
border-radius: 3px; width: 270px;padding: 1em 2em;margin-top: -25px;">
                    <a onclick="document.getElementById('id01').style.display='block'" class="btnxx">
                        Vui lòng <b style="color:#637AB7;font-weight: bold;">đăng nhập</b> để tải.
                    </a>   
                </div>

</div>
<div class="thong_bao_can_mua" style="color: #337AB7;border: 1px solid #337AB7;
border-radius: 3px; width: 330px;padding: 1em 2em;text-align: center;">
                     <?php 
                        if($_SESSION['login_member']=='ok')
                        {
                            $giatri='id03';
                        }
                        else
                        {
                            $giatri='id01';
                        }
                    ?>

                    <a 

                    onclick="document.getElementById('<?php echo $giatri;?>').style.display='block'">
                        Đây là tài liệu có phí, vui lòng mua để đọc online hoặc tải.
                    </a>
                    <br>
                    <hr>
                    <a  onclick="document.getElementById('id07').style.display='block'"><b>Đọc thử</b></a>        
</div>
<div id="id07" class="modal" style="z-index: 100;">
  <form class="modal-content" action="" method="post" style="padding:100px;width: 800px;background-color:#D9EDF4;">
      <span onclick="document.getElementById('id07').style.display='none'" class="closex" title="Close Modal">&times;</span>
  <img style="width: 300px; height: 350px;margin-bottom: 20px;  border-radius: 3px;
    box-shadow: 0 0 25px 25px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $sp[6]?>" class="attachment-shop_single wp-post-image"/>     
<p><?php echo $sp[11]?></p>

   </form>
<script>
// Get the modal
var modal = document.getElementById('id07');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>

<?php 
if($_SESSION['login_member']=='ok')
{
    echo '
<style type="text/css">
    #tai_epub_pdf
    {
        display: block;
    }
    #canh_bao_doc_online
    {
        display: none;
    }
</style>
';
}
else
{
    echo'
<style type="text/css">
    #tai_epub_pdf
    {
        display: none;
    }
    #canh_bao_doc_online
    {
        display: block;
    }
</style>
    ';
}
?>


    </div>
</div>

</div>
    <div id="id03" class="modal" style="z-index: 100;">

  <form class="modal-content" action="" method="post" style="padding:0 0 30px 30px;width: 500px;background-color:#D9EDF4;">

          <br><br>
          <style type="text/css">
              .bang_tinh_tien td
              {
                width: 100px;
                text-align: left;
                color: #3552A4;
              }
              .bang_tinh_tien
              {
                margin-left: 130px;
              }
              .button_mua_sach
              {
                      background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    margin-left: 150px;
              }
          </style>
    <?php
                $ten=$_SESSION['tendangnhap'];

                $query4="SELECT * FROM khachhang WHERE tendangnhap='$ten'";
                $row1=$db->query($query4);

                
                 foreach ($row1 as $ro)
                {
                    $taikhoan=$ro[0];
                    $hovaten=$ro[3];
                    $soxu=$ro[8];
                }
                echo '<b>Tên tài khoản:</b> ';
                echo $hovaten;
                echo '.<b> Số xu:</b>';
                echo $soxu;
                echo '<br><b>Bạn đang mua sách</b>';
                $query5="SELECT * FROM sach WHERE masach=$masp";
                $dong=$db->query($query5);

                
                 foreach ($dong as $d)

                {
                    echo "
                    <img style='width:150px;height:200px;margin-left:140px;margin-top:10px;'src='./images/product/".$d[6]."'/>
                       <br>
                       <p style='font-size:1.5em;'><b>$d[2]<br></b></p>
                       <b>$d[7]<br></b>
                       Giá: <span><b>$d[3]VNĐ (1 XU = 1000 VNĐ)<br></b></span>
                        ";
                    $giatien=settype($d[3], int);
                }
                if($soxu*1000-$d[3]>=0)
                {
                  $conlai=($soxu*1000-$d[3])/1000;
                  $giasach=$d[3]/1000;
                  $giasach2=$d[3]*1;
                    echo'
<table class="bang_tinh_tien">
    <tr>
    <td><b>Tài khoản:</b></td>
    <td>'.$soxu.' <b>Xu</b></td>
    </tr>
    <tr>
    <td><b>Giá sách:</b></td>
    <td>'.$giasach.' <b>Xu</b></td>
    </tr>
    <tr>
    <td><b>Còn lại:</b></td>
    <td>'.$conlai.' <b>Xu</b></td>
    </tr>
</table>
  <form action="" method="post" style="padding: 30px;">
  <input style="display:none;" type="text" name="nguoimua" value='.$taikhoan.'>
  <input style="display:none;" type="text" name="sachduocmua" value='.$masp.'>
  <input style="display:none;" type="text" name="giatien" value='.$giasach2.'>
         <button type="submit" class="button_mua_sach" onclick="return check()">Mua Sách</button> 
  </form>     
                    '
                    ;
                }
                else
                {

                    echo '<span><b>Số xu trong tài khoản hiện không đủ.</b></span>';
                }


    ?>

</form>
<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>


<?php 
$sotien=number_format($sp[3]);
settype($sotien, int);
if($sotien*1000!=0)
{

    echo '
<style type="text/css">

   .mua_ban_sach
   {
    display: none;
   }
      .thong_bao_can_mua
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
   .mua_ban_sach
   {
    display: block;
   }
   .thong_bao_can_mua
   {
    display: none;
   }
</style>
    ';
}
?>
<div class="woocommerce-tabs" style="padding: 10px 50px; text-align: justify;">
<ul class="tabs">
<li class="description_tab">
<a href="#">Thông tin chi tiết</a>
</li>
</ul>
<div class="panel entry-content" id="tab-description" style="padding: 1em 5em;">

<p><?php echo $sp[11]?></p>
</div>
</div>
<div class="fb-comments" data-href="http://localhost:8080/project1/index.php?page=sanphamct&masp=<?php echo $sp[0]?>" data-width="800" data-numposts="5"></div>
<style type="text/css">
    .fb-comments
    {
        margin-left: 150px;
    }
</style>



        
<div class="related products" style="border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1); height: 400px; padding: 10px 20px; margin-bottom: 50px;">
<h2>Sách cùng thể loại</h2>
<br><br>
<ul class="products">
    <?php
        $query="SELECT * from danhmucchitiet JOIN sach ON danhmucchitiet.madmct=sach.madmct JOIN danhmucchinh on danhmucchitiet.madmc=danhmucchinh.madmc where masach!=$sp[0] and danhmucchitiet.madmct in(select danhmucchitiet.madmct from danhmucchitiet where danhmucchitiet.madmc=(select madmc from danhmucchitiet where danhmucchitiet.madmct=$sp[1]))  limit 4" ;
        $rows=$db->query($query);
        $i=0;
        foreach ($rows as $r)
        {
            $i=$i+1;
            if($i%4==1)
            {
            ?>
        <li class="post-1958 product type-product status-publish hentry first featured instock"  style="float: left; margin-left: 30px;  border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1); width: 200px; margin-right: 20px; height: 300px; padding: 5px 30px;">
        <a href="index.php?page=sanphamct&masp=<?php echo $r[3]?>">
            <img style="width: 135px; height: 200px" src="./images/product/<?php echo $r[9]?>" class="attachment-shop_catalog wp-post-image" />
        <div style="height: 70px;"><h3><?php echo $r[5]?></h3></div>
        <div style="height: 30px;"><h4><?php echo $r[10]?></h4></div>
        </a>
        </li>
         <?php
        }
        else
        {
         ?>  
        <li class="child_lien_quan" style="float: left; margin-left: 30px;  border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1); width: 200px; margin-right: 20px; height: 300px; padding: 5px 30px;">
        <a href="index.php?page=sanphamct&masp=<?php echo $r[3]?>">
            <img style="width: 160px; height: 200px" src="./images/product/<?php echo $r[9]?> " class="attachment-shop_catalog wp-post-image" alt="0330523627"/>
        <div style="height: 70px;"><h3><?php echo $r[5]?></h3></div>
        <div style="height: 30px;"><h4><?php echo $r[10]?></h4></div>
        </a>
        </li>
        <?php
        }
        }
    }
        ?>
</ul>
</div>
    </div>
</div>
    

</div>
</div>
</div>
</div>
<?php 
    $usr=$_SESSION['tendangnhap'];

    $query1="select * from donhang where tendangnhap='$usr' and masach=$masp";

    $dong=$db->query($query1);
    foreach ($dong as $d)
        {
            echo '
<style type="text/css">
    .thong_bao_can_mua
    {
        display: none;
    }
    .mua_ban_sach
    {
        display: block;
    }
</style>
            ';
        }
?>
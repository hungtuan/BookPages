<style type="text/css">
    li img:hover
    {
        border: 1px solid #3552A4;
    }
</style>
<div class="row">
<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-203" class="post-203 page type-page status-publish hentry page instock">

    <div id="tat_ca">
        <a href="index.php?page=sanpham" class="tieu_de_h3">Tất cả các sách.</a> 

        <hr>
<div id="tat_ca_content">
    <ul>
<?php
$query = "SELECT *
        FROM sach
        limit 0,10";
                $rows=$db->query($query);
                $i=0;
                foreach ($rows as $r)
                {
                    $i=$i+1;
                    if($i%5==1)
                    {
                    ?>
                <li class="danh_sach" style="width: 200px; float:left; margin-left: 15px;margin-right:10px;margin-top: 20px;list-style-image: none;height: 380px;">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                    <img style="width: 200px; height: 250px;    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $r[6]?>" class="attachment-shop_catalog wp-post-image" />
    <br>
                <div style="height: 40px;margin-bottom: 5px"><h3><?php echo $r[2]?></h3></div>
                 <div style="height: 25px;"> <h5><?php echo $r[7]?></h5></div>
                <div style="height: 25px;"> <h5 style="margin-top: 10px;"><?php echo $r[9]?> <i class="fas fa-eye"></i>          <?php echo $r[10]?><i class="icon-download"></i></h5>   </div>            
                </a>

                <div style="height: 35px;"><h4 style="color: #3552A4;text-align: center;" class="gia_ca_co1"><?php echo number_format($r[3]) ?><b>   VNĐ</b></h4>  </div>     
  
                <div class='extra-wrap'>
                <br>

                </div>
                </li>
                 <?php
                }
                else
                {
                 ?>  
                <li class="danh_sach" style="width: 200px; float:left; margin-left: 10px;margin-right:10px;margin-top: 20px;list-style-image: none;">
                    <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                        <img style="width: 200px; height: 250px;    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $r[6]?> " class="attachment-shop_catalog wp-post-image" alt="0330523627"/>
    <br>
                <div style="height: 40px;margin-bottom: 5px"><h3><?php echo $r[2]?></h3></div>
                 <div style="height: 25px;"> <h5><?php echo $r[7]?></h5></div>
                <div style="height: 25px;"> <h5 style="margin-top: 10px;"><?php echo $r[9]?> <i class="fas fa-eye"></i>          <?php echo $r[10]?><i class="icon-download"></i></h5>   </div>            
                </a>

                <div style="height: 35px;"><h4 style="color: #3552A4;text-align: center;" class="gia_ca_co1"><?php echo number_format($r[3]) ?><b>   VNĐ</b></h4>  </div>        
             
                    <div class='extra-wrap'> <div class="short_desc">
                             <br>

                    </div>
                    </li>
                    <?php
                    }
                    }
?>
</div>
       </div>
    </div>
	<div class="clearfix"></div>
</ul>
    <div id="new_week" class="clearfix">
        <a href="index.php?page=sanphambanchaynhat" class="tieu_de_h3">Sách bán chạy nhất.</a>   

        <hr>
        <div id="new_week_content">
<?php
$query = "SELECT *FROM sach where giaban !=0 order by soluongdoc DESC limit 0,4 ";
$rows=$db->query($query);
    $i=0;
foreach ($rows as $r)
{
        if($i%5==0){
        ?>
   
        <?php
        }
?>
        <div class="san_pham_moi_nhat">
            <div class="panel panel-primary">
            <div class="panel-body">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                <img src="./images/product/<?php echo $r[6]; ?>" 
                class="img-responsive" style="width:200px; height: 250px;" alt="Image" />
                </a>
            </div>
            <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
            <div class="panel-headingx" >
             <div style="height: 44px;">   <h3 style="margin-bottom: 5px;margin-top: 10px;"><?php echo $r[2]; ?></h3></div>
              <div style="height: 25px;">  <h4><?php echo $r[7]; ?></h4></div>
            </div>
               <h4 style="color: #3552A4;text-align: center;" class="gia_ca_co"><?php echo number_format($r[3]) ?><b>   VNĐ</b></h4>               
                </a>
            </div>
         </div>
        
        <?php
        if($i%3==2){
        ?><br />  
        <?php
        }    
}   
 
?>
<div class="clearfix"></div>
        </div>
    </div>
	
    <div id="new_week" class="clearfix">
        <a href="index.php?page=sanphammienphi" class="tieu_de_h3">Miễn phí phổ biến nhất.</a>   

        <hr>
        <div id="new_week_content">
<?php
$query = "SELECT *FROM sach where giaban =0 order by soluongdoc DESC limit 0,4 ";
$rows=$db->query($query);
    $i=0;
foreach ($rows as $r)
{
        if($i%5==0){
        ?>
   
        <?php
        }
?>
        <div class="san_pham_moi_nhat">
            <div class="panel panel-primary">
            <div class="panel-body">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                <img src="./images/product/<?php echo $r[6]; ?>" 
                class="img-responsive" style="width:200px; height: 250px;" alt="Image" />
                </a>
            </div>
            <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
            <div class="panel-headingx" >
             <div style="height: 70px">   <h3 style="margin-bottom: 5px;margin-top: 10px;"><?php echo $r[2]; ?></h3></div>
              <div style="height: 25px">  <h4><?php echo $r[7]; ?></h4></div>
            </div>              
                </a>
            </div>
         </div>
        
        <?php
        if($i%3==2){
        ?><br />  
        <?php
        }    
}   
 
?>
<div class="clearfix"></div>
        </div>
    </div>	
    <div id="top" class="clearfix">
    <div id="top_member">
        <a href="#"><h3 id="h3_member">Thành viên đọc nhiều</h3></a>
        <hr>
        <div id="top_member_content">
<?php
$query = "SELECT *FROM khachhang order by soluongsachdadoc DESC limit 0,10 ";
$rows=$db->query($query);
    $i=0;
foreach ($rows as $r)
{
        if($i%5==0){
        ?>
   
        <?php
        }
?>
        <div class="thanh_vien_doc_nhieu">
            <a href="index.php?page=account&tendangnhap=<?php echo $r[0]?>">
            <div class="ten_ban_doc"><?php echo $r[3]; ?></div>
            <div class="so_luong_da_doc">Số sách đã đọc: <?php echo $r[6]; ?> </div>
        </a>
         </div>
        
        <?php
        if($i%3==2){
        ?><br />  
        <?php
        }    
}   
 
?>
        </div>
    </div>
    <div id="list_reading">
        <a href="#" class="tieu_de_h3">Truyện đọc nhiều</a>

        <hr>
        <div id="list_reading_content">
<?php
$query = "SELECT *
        FROM sach
        order by soluongdoc desc
        limit 0,6";
$rows=$db->query($query);
    $i=0;
foreach ($rows as $r)
{
        if($i%3==0){
        ?>
<div class="content_hang">
    <div class="hang">    
        <?php
        }
?>
        <div class="san_pham_vts_doc_nhieu">
            <div class="panel panel-primary">
            <div class="panel-body">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                <img src="./images/product/<?php echo $r[6]; ?>" 
                class="img-responsive" style="width:180px; height: 200px;" alt="Image" />
                </a>
            </div>
            <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
            <div class="panel-headingx" >
             <div style="height: 45px;margin-top: 10px">   <h3 style="margin-bottom: 0px;margin-top: 0px;font-size: 1em;"><?php echo $r[2]; ?></h3></div>
              <div style="height: 20px">  <h4><?php echo $r[7]; ?></h4></div>
            </div>
                </a>
            <div class="panel-headingx"><?php echo $r[9]; ?> lượt xem <i class="fas fa-eye"></i></div> 
            </div>
         </div>
        
        <?php
        if($i%3==2){
        ?>
    </div>  
</div><br />  
        <?php
        }
  $i++;      
}   
 
?>
</div>
       </div>
    </div>
    <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div id="top_sell">
        <a href="#"  class="tieu_de_h3">Tải nhiều nhất</a>

        <hr>
        <div id="top_sell_content">
<?php
$query = "SELECT *FROM sach order by soluongtai DESC limit 0,4 ";
$rows=$db->query($query);
    $i=0;
foreach ($rows as $r)
{
        if($i%5==0){
        ?>
   
        <?php
        }
?>
        <div class="san_pham_tai_nhieu_nhat">
            <div class="panel panel-primary">
            <div class="panel-body">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                <img src="./images/product/<?php echo $r[6]; ?>" 
                class="img-responsive" style="width:180px; height: 220px;" alt="Image" />
                </a>
            </div>
            <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
            <div class="panel-headingx" >
             <div style="height: 40px">   <h3 style="margin-bottom: 5px;margin-top: 10px;font-size: 1em;"><?php echo $r[2]; ?></h3></div>
              <div style="height: 25px">  <h4><?php echo $r[7]; ?></h4></div>
            </div>
                </a>
            <div class="panel-headingx"><?php echo $r[10]; ?> lượt tải <i class="fas fa-arrow-alt-circle-down"></i></div> 

            </div>
         </div>
        
        <?php
        if($i%3==2){
        ?><br />  
        <?php
        }    
}   
 
?>
<div class="clearfix"></div>
        </div>
    </div>
<div class="clear"></div>
 
</div> 
</div>


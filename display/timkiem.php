<style type="text/css">
    li img:hover
    {
        border: 1px solid #3552A4;
    }
</style>
<div class="motopress-wrapper content-holder clearfix woocommerce" id="duong_sang">
   <div class="container">
        <div class="row">
            <div class="span12">
                <section class="title-section">
                <h1 class="title-header">
		  Sách
                </h1>
				<!-- BEGIN BREADCRUMBS-->
                    <ul class="breadcrumb breadcrumb__t">
                        <a class="home" href="index.php">Trang chủ</a> / <a href="index.php?page=sanpham">Tất cả thể loại</a>
                    </ul>			<!-- END BREADCRUMBS -->
            </section>
            </div>
	</div>
       <div class="row">
	<div class="span9 right" id="content">
            <h1 class="page-title"></h1>

	<ul class="products" style="margin-top: 20px;">
            <?php
                
                $query="select * from sach join danhmucchitiet on sach.madmct=danhmucchitiet.madmct"
                . " where 1=1 ";
                if(isset($_REQUEST['key']) && $_REQUEST['key']!='')
                    {
                        $key=$_REQUEST['key'];
                        $key = strip_tags($key);
                        $key = addslashes($key);

                        $query.= " and (tensach like '%$key%' or tentacgia like '%$key%' or tendmct like '%$key%')";
                    } 
                $query.=" limit 50";
                //echo $query;
                $rows=$db->query($query);
                $i=0;
                foreach ($rows as $r)
                {
                    $i=$i+1;
                    if($i%4==1)
                    {
                    ?>
                <li class="post-1958 product type-product status-publish hentry first featured instock" style="width: 200px;">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                    <img style="width: 200px; height: 250px;    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $r[6]?>" class="attachment-shop_catalog wp-post-image" />
                <h3><?php echo $r[2]?></h3>
                    <h5><?php echo $r[7]?></h5><br>
       
                <h4 style="color: #3552A4" class="gia_ca_co"><?php echo number_format($r[3]) ?><b>   VNĐ</b></h4>       
                
                    <h5 style="margin-top: 10px;"><?php echo $r[9]?> <i class="fas fa-eye"></i>          <?php echo $r[10]?><i class="fas fa-arrow-alt-circle-down"></i></h5>               
                </a>
                <div class='extra-wrap'>
                <br>

                </div>
                </li>
                 <?php
                }
                else
                {
                 ?>  
                    <li class="post-1954 product type-product status-publish hentry featured instock">
                    <a href="index.php?page=sanphamct&masp=<?php echo $r[0]?>">
                        <img style="width: 200px; height: 250px;    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $r[6]?> " class="attachment-shop_catalog wp-post-image" alt="0330523627"/>
                    <h3><?php echo $r[2]?></h3>
                    <h5><?php echo $r[7]?></h5><br>
   
                <h4 style="color: #3552A4" class="gia_ca_co"><?php echo number_format($r[3]) ?><b>   VNĐ</b></h4>       
          
                                        <h5 style="margin-top: 10px;"><?php echo $r[9]?> <i class="fas fa-eye"></i>          <?php echo $r[10]?><i class="fas fa-arrow-alt-circle-down"></i></h5>   
                    </a>
                    <div class='extra-wrap'> <div class="short_desc">
                             <br>

                    </div>
                    </li>
                    <?php
                    }
                    }
                    ?>
                 
  
                    <div style="clear: both"></div>       
<nav class="woocommerce-pagination">
	<ul class='page-numbers'>
	<?php
        $q = "select count(*) from sach";
             $rs = $db->query($q);
              $tong = $rs->fetch()[0];  
              $n=6;
              $sotrang = ceil($tong/$n);
              
               for($k=1;$k<=$sotrang;$k++)
               {
                   echo "<li><a class='page-numbers' href=''>$k</a></li>";
               }
        ?>
</ul>
</nav>
		
	</div>

       </div>
	</div>
	</div>
	</div>
	
	

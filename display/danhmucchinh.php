<style type="text/css">
    li img:hover
    {
        border: 1px solid #3552A4;
    }
</style>
<div class="khung_lon" id="duong_sang">
   <div class="khung_nho_bac_1">
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

            <div style="margin-top: 30px;">
                <form method="post" style="float: left">
                        <select name="orderby" class="orderby" style="height: 30px;">
                                <option value="1" >Xếp theo sản phẩm mới</option>
                                <option value="2" >Xếp theo tên:A->Z</option>
                                <option value="3" >Xếp theo tên:Z->A</option>
                                <option value="4" >Xếp theo lượt xem</option>
                                <option value="5" >Xếp theo lượt tải</option>
                                <option value="6" >Xếp theo giá tăng dần</option>
                                <option value="7" >Xếp theo giá giảm dần</option>                               
                        </select>
                    <input type="submit" value="Sắp xếp" style="padding: 5px 10px; border-radius: 3px;">
                </form>
                <form action="index.php" method="get" style="float: right">
                    <div >Tìm kiếm: 
                        <input type="hidden" name='page' value="sanpham"/>
                        <input type="text" placeholder="Nhập thông tin tìm kiếm" name="key" style="height: 30px;">
                        <input type="submit" value="Tìm kiếm" style="padding: 5px 10px; border-radius: 3px;">
                    </div>
                </form>
            </div>
	
<br><br><br><br>
                <?php
                    if(isset($_REQUEST['madmc']))
                {
                    $madm=$_REQUEST['madmc'];
                        $madm = strip_tags($madm);
                        $madm = addslashes($madm);                                        
                    $query2="select * from danhmucchinh where danhmucchinh.madmc=$madm";
                    $dong1=$db->query($query2);
                    foreach ($dong1 as $d1)
                    {
                        echo "
                        <span style='font-size:2em;font-weight: bold;'>Thể loại: $d1[1].</span>
                        ";
                    }
   
                }

                ?>
<p>Danh mục con: </p>
                <?php
                    if(isset($_REQUEST['madmc']))
                {
                    $madmc=$_REQUEST['madmc'];                    
                    $query1="select * from danhmucchinh JOIN danhmucchitiet on danhmucchinh.madmc=danhmucchitiet.madmc where danhmucchinh.madmc=$madmc";
                    $dong=$db->query($query1);
                    foreach ($dong as $d)
                    {
                        echo "<li class='cat-item cat-item-21'><a href='index.php?page=sanpham&madm=".$d[2]."'>$d[3]</a></li>";
                    }
                }

                ?>

	<ul class="products" style="margin-top: 20px;">
            <?php
                
                $query="SELECT * from danhmucchitiet JOIN sach ON danhmucchitiet.madmct=sach.madmct JOIN danhmucchinh on danhmucchitiet.madmc=danhmucchinh.madmc"
                . " where 1=1 ";

                if(isset($_REQUEST['madmc']))
                {
                    $query.=' and danhmucchinh.madmc='.$_REQUEST['madmc'];
                }
                if(isset($_REQUEST['max']) && isset($_REQUEST['min']))
                {
                    $min=$_REQUEST['min'];
                    $max=$_REQUEST['max'];
                    $query.=' and '.$min.'<=giaban<='.$max;
                }
                if(isset($_REQUEST['key']) && $_REQUEST['key']!='')
                    {
                        $key=$_REQUEST['key'];
                        $query.= " and (tensach like '%$key%' or tentacgia like '%$key%')";
                    } 
                if($_SERVER["REQUEST_METHOD"]=="POST")
                {
                    if($_POST['orderby']==2)
                    {
                        $query.=" order by tensach asc";
                    }
                    else if($_POST['orderby']==1)
                    {
                        $query.=" order by ngaydang desc";
                    }                   
                    else if($_POST['orderby']==3)
                    {
                        $query.=" order by tensach desc";
                    }
                    else if($_POST['orderby']==4)
                    {
                        $query.=" order by soluongdoc desc";
                    }
                    else if($_POST['orderby']==5)
                    {
                        $query.=" order by soluongtai desc";
                    }
                    else if($_POST['orderby']==6)
                    {
                        $query.=" order by giaban asc";
                    } 
                    else if($_POST['orderby']==7)
                    {
                        $query.=" order by giaban desc";
                    }  
                    else $query.=" order by masach desc";
                }
                $query.=" limit 24";
                //echo $query;
                $rows=$db->query($query);
                $i=0;
                foreach ($rows as $r)
                {
                    $i=$i+1;
                    if($i%4==1)
                    {
                    ?>
                <li class="post-1958 product type-product status-publish hentry first featured instock" style="width: 200px; float: left;margin-left: 35px;margin-right: 30px;">
                <a href="index.php?page=sanphamct&masp=<?php echo $r[3]?>">
                    <img style="width: 200px; height: 250px;    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $r[9]?>" class="attachment-shop_catalog wp-post-image" />
                <h3><?php echo $r[5]?></h3>
                    <h5><?php echo $r[10]?></h5><br>
      
                <h4 style="color: #3552A4" class="gia_ca_co2"><?php echo number_format($r[6]) ?><b>   VNĐ</b></h4>       
           
                    <h5 style="margin-top: 10px;"><?php echo $r[12]?> <i class="fas fa-eye"></i>          <?php echo $r[13]?><i class="fas fa-arrow-alt-circle-down"></i></h5>               
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
                <li class="post-1958 product type-product status-publish hentry first featured instock" style="width: 200px; float: left;margin-left: 35px;margin-right: 30px;">
                    <a href="index.php?page=sanphamct&masp=<?php echo $r[3]?>">
                        <img style="width: 200px; height: 250px;    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);" src="./images/product/<?php echo $r[9]?> " class="attachment-shop_catalog wp-post-image" alt="0330523627"/>
                    <h3><?php echo $r[5]?></h3>
                    <h5><?php echo $r[10]?></h5><br>
             
                <h4 style="color: #3552A4" class="gia_ca_co3"><?php echo number_format($r[6]) ?><b>   VNĐ</b></h4>       
      
                                        <h5 style="margin-top: 10px;"><?php echo $r[12]?> <i class="fas fa-eye"></i>          <?php echo $r[13]?><i class="fas fa-arrow-alt-circle-down"></i></h5>   
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

		
	</div>

       </div>
	</div>
	</div>
	</div>
	
	

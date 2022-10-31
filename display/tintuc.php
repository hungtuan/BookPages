

<div class="motopress-wrapper content-holder clearfix" id="duong_sang">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header" style="font-size: 3em;">
Tin tức </h1>
 
<ul class="breadcrumb breadcrumb__t" style="font-size: 2em;"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li><li class="active">Tin tức</li></ul>  
</section>  </div>
</div>
<div class="row" style="margin-bottom: 30px;margin-top: 30px;">
<div class="span11 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php">
    
    
 <?php
  

 
    $query="select * from tintucsach order by ngaytao desc limit 10";
    $rows=$db->query($query);
    foreach ($rows as $r)
    {
    
?>
<div class="post_wrapper"><article id="post-71" class="post-71 post type-post status-publish format-standard hentry category-adipisicing-elit post__holder cat-1-id instock">
<header class="post-header">
<h2 class="post-title">
    <a href="index.php?page=tintucct&matt=<?php echo $r[0]?>" title="<?php echo $r[1]?>"><?php echo $r[1]?></a></h2>
</header>
<figure class="featured-thumbnail thumbnail ">
    <a href="index.php?page=tintucct&matt=<?php echo $r[0]?>">
        <img style="width: 200px; height: 150px"src="./images/product/<?php echo $r[2]?>">
    </a>
    <br>
</figure>
 
<div class="post_content">
<div class="excerpt">
    <?php echo substr($r[3],0,500)?>...
 </div>
 <br>
<a href="index.php?page=tintucct&matt=<?php echo $r[0]?>" class="btn btn-primary">Đọc tiếp</a>
<br>
<br>
<div class="clear"></div>
</div>
 
<div class="post_meta meta_type_line"><div class="post_meta_unite clearfix"> <div class="post_date">
            <img src="images/source/calender.png" width="15px"><br>
<span><?php echo $r[4]?></time> </span>
</div></div> </article></div>
    <?php
    }
    ?>

  </div>

</div>
</div>
</div>
</div>
</div>
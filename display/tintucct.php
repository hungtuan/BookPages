
<?php
        $matt=$_REQUEST['matt'];
        $matt = strip_tags($matt);
    $matt = addslashes($matt);
    $query='select * from tintucsach where matt='.$matt;
    $rows = $db->query($query);
            $r=$rows->fetch();
?>
<div class="motopress-wrapper content-holder clearfix" id="duong_sang">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="index.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
</div>
</div>
<div class="row">
<div class="span11 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-blog.php" style="padding: 1em 4em;">
	<img style="width: 500px; height: 400px; margin: 0 auto;margin-top: 20px;margin-bottom: 30px;"src="./images/source/<?php echo $r[2]?>">
    <h2><?php echo $r[1]?></h2>
    <div style="text-align: justify;">    <?php echo $r[3]?></div>


     <br><br><br><br><br>
  </div>
  </div>

</div>
</div>
</div>
</div>
</div>
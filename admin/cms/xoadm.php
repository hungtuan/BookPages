<?php
     $ma=$_REQUEST['ma'];
     $query= "delete from danhmucchitiet where madmct=$ma";
     $count=$db->exec($query);
     if($count>0)
         header("location:?page=dsdm");
?>


<?php
     include '../includes/connect.php';
     $masp=$_REQUEST['masp'];
     $q="select tensach, hinhanh,link_pdf,link_epub from sach where masach=$masp";
     $d=$db->query($q);
     $r=$d->fetch();
     if(unlink("../images/product/$r[1]")) echo '<script>alert("Xóa Thành công")</script>';
     unlink("../ebook/pdf/$r[2]");
     unlink("../ebook/epub/$r[3]");
     $query= "delete from sach where masach=$masp";
     
     $count=$db->exec($query);
     if($count>0)
         header("location:index.php?page=dssp");
?>


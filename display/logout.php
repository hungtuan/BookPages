<?php
   
    if(isset($_SESSION['login_member']))
    {
        unset($_SESSION['login_member']);
        unset($_SESSION['tendangnhap']);
        
    }
    header("location:index.php");
?>
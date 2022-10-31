<section class="title-section" id="duong_sang">
<h1 class="title-header">
Đăng ký thành viên </h1>
 
<?php
                     
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
               
                $error = array(); //Khoi tao mang loi rong
                if(empty($_POST['tendangnhap1']))
                {
                    $error[]='tendn';
                }
                else
                {
                    $tendn=$_POST['tendangnhap1'];
                     $kt="select * from khachhang where tendangnhap='$tendn'";
                     $kt1=$db->query($kt);
                     $kt2=$kt1->fetch();
                }
                if(isset($kt2) && $kt2>0)
                {
                    $error[]='trungten';
                }
                if(empty($_POST['matkhau1']))
                {
                    $error[]='matkhau';
                }
                else
                {
                    $matkhau=$_POST['matkhau1']; 
                }
                if(empty($_POST['hoten']))
                {
                    $error[]='hoten';
                }
                else
                {
                    $hoten=$_POST['hoten']; 
                }
                if(empty($_POST['diachi']))
                {
                    $error[]='diachi';
                }
                else
                {
                    $diachi=$_POST['diachi']; 
                }
                 if(empty($_POST['email']))
                {
                    $error[]='email';
                }
                else
                {
                    $email=$_POST['email'];
                }
                if(empty($_POST['sdt']))
                {
                    $error[]='sdt';
                }
                else
                {
                    $sdt=$_POST['sdt']; 
                }
                if (empty($error))
                {             
                    $query = "insert into khachhang(tendangnhap, matkhau, hoten ,diachi , email, sdt, ngaytao) values('$tendn', md5('$matkhau'), '$hoten', '$diachi', '$email', '$sdt', CURDATE())";  
                    $count=$db->exec($query);
                    if($count>0)
                    {
                       // header("location:?page=login");
                       echo "<script>"
                        . "if(confirm('Đăng ký thành viên thành công')==true)"
                            . "{"
                               . "window.location='index.php?page=login'"
                               . "}</script>"     ;                      
                    }
                }
            }
        
        ?>

<ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Trang chủ</a></li><li class="divider"></li></ul>
<div style="    border-radius: 3px;
    box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1); width: 70%;margin:0 auto; padding: 30px 0;margin-bottom: 30px;background-color: #FEFEFE"> 
    <form action="" method="post" style="margin-left: 240px;">
                <h1>THÔNG TIN ĐĂNG KÍ</h1>
                <BR>
                            <div class="control-group">
                                <label class="control-label tieude">Tên đăng nhập:</label><br>
                                        <div class="controls">
                                            <input type="text" name="tendangnhap1" class="regis_input"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('tendangnhap', $error))
                                                    {
                                                        echo "  Mời nhập tên đăng nhập !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>  
                         <div class="control-group">
                                    <label class="control-label tieude">Mật khẩu:</label>
                                        <div class="controls">
                                            <input type="password" name="matkhau1" AUTOCOMPLETE="off" class="regis_input"/>
                                            <span style="color: red; padding-left: 15px">
                                                 <?php
                                                    if(!empty($error) && in_array('matkhau', $error))
                                                    {
                                                        echo "  Mời nhập mật khẩu !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                            <div class="control-group">
                                    <label class="control-label tieude">Họ và tên:</label>
                                        <div class="controls">
                                            <input type="text" name="hoten" class="regis_input">
                                                 <?php
                                                    if(!empty($error) && in_array('hoten', $error))
                                                    {
                                                        echo "  Mời nhập họ tên !";
                                                    }
                                                    else 
                                                        if(!empty ($error) && in_array('trungten', $error))
                                                        {
                                                            echo "  Tên đăng nhập đã tồn tại !";
                                                        }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                                <div class="control-group">
                                    <label class="control-label tieude">Địa chỉ:</label>
                                        <div class="controls">
                                            <input type="text" name="diachi" class="regis_input">
                                                 <?php
                                                    if(!empty($error) && in_array('diachi', $error))
                                                    {
                                                        echo "  Mời nhập địa chỉ !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                                <div class="control-group">
                                    <label class="control-label tieude">Email:</label>
                                        <div class="controls">
                                            <input type="email" name="email" class="regis_input">
                                                 <?php
                                                    if(!empty($error) && in_array('email', $error))
                                                    {
                                                        echo "  Mời nhập email !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                   <div class="control-group">
                                    <label class="control-label tieude">Số điện thoại</label>
                                        <div class="controls">
                                            <input type="text" name="sdt" class="regis_input">
                                                 <?php
                                                    if(!empty($error) && in_array('sdt', $error))
                                                    {
                                                        echo "  Mời nhập số điện thoại !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                             <button type="submit" name="button_dang_ki" class="button_regis">Đăng Ký</button>
    </form> 
	</div>
</section>
<div class="motopress-wrapper content-holder clearfix" id="duong_sang">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
<div class="row">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
<section class="title-section">
<h1 class="title-header">
Đăng nhập </h1>

</section>  </div>
</div>
<div class="row">
<div class="span9 right right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
    <?php
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
            if ($_SERVER["REQUEST_METHOD"]=='POST')
            {
		// lấy thông tin người dùng
		$username = $_POST["tendangnhap"];
		$password = $_POST["matkhau"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") 
                    {
			echo "<script>alert('Tên đăng nhập hoặc mật khẩu bạn không được để trống!')</script>";
                    }
                else
                    {
			$sql = "select * from khachhang where tendangnhap ='$username' and matkhau =md5('$password') ";
           
			$rows=$db->query($sql);
                        $rs = $rows->fetch();
			if (!empty($rs))
                            {
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                                $_SESSION['login_member']='ok';
				$_SESSION['tendangnhap'] = $username;
                                // Thực thi hành động sau khi lưu thông tin vào session

                                header('Location: index.php');
                             }

                            
                    }
                    }
?>
    <div style="border-radius: 5px;box-shadow: 0 0 7px 7px rgba(0, 0, 0, 0.1);
    padding: 20px 30px;width: 60%;margin:0 auto;margin-top: 50px;margin-bottom: 50px;">
    <h2 style="text-align: center; margin-bottom: 30px;">Thông tin đăng nhập</h2>
    <form action="" method="post" style="margin-left: 180px;">
                                <div class="control-group">
                                <label class="control-label tieude">Tên đăng nhập:</label>
                                        <div class="controls">
                                            <input type="text" name="tendangnhap" class="span4" style="margin-top: 10px;margin-bottom: 10px;width: 250px;height: 25px;border-radius: 5px;" />
                                        
                                        </div>
                                </div>  
                                <div class="control-group">
                                    <label class="control-label tieude">Mật khẩu:</label>
                                        <div class="controls">
                                            <input type="password" AUTOCOMPLETE="off" name="matkhau" class="span4" style="margin-top: 10px;margin-bottom: 30px;width: 250px;height: 25px;border-radius: 5px;" />
                                        </div>
                                </div>   
         <button type="submit" class="single_add_to_cart_button button alt" style="padding: 5px 10px;margin-left: 80px; border-radius: 5px;">Đăng nhập</button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
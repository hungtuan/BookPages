<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VTSBook - Website đọc sách trực tuyến</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/owl-carousel.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.slides.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript" src="js/currency-autocomplete.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2A/jquery.min.js"></script>  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
  <script src="js/jquery-1.7.2.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">   
    <link rel="stylesheet" id="contact-form-7-css" href="css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="css/font-awesome.css" type="text/css" media="all">

    <link rel="stylesheet" id="woocommerce_frontend_styles-css" href="css/woocommerce.css" type="text/css" media="all">
    <?php error_reporting(0); ?>

    <link rel="stylesheet" type="text/css" media="all" href="css/camera.css">


	<link rel="shortcut icon" href="./images/book.png" type="image/png">
         <script type="text/javascript">
            $(document).ready(function(){
                $('#submit').click(function()
                {
                    var captcha = $('#captcha').val();
                    if( captcha.length == 0){
                        $('#captcha').addClass('error');
                    }else{
                        $('#captcha').removeClass('error');
                    }
                    
          // Kiểm tra 3 field, nếu thỏa điều kiện thì nó sẽ submit
                    if(captcha.length != 0){
                        return true;
                    }
          
          // Nếu ko thỏa thì ko submit form
                    return false;
                });
        
        // Lấy kết quả kiểm tra captcha
                var capch = '<?php echo $mes; ?>';
        
        // Kiểm tra captcha có đúng hay không rồi hiện thông báo phù hợp
                if(capch != 'notOk'){
                    if(capch == 'Ok'){
                        $('.captcha_status').html("Thành công: Thông tin của bạn đã được gởi đi!!!").fadeIn('slow').delay(4000).fadeOut('slow');
                    }else{
                        $('.captcha_status').html("Lỗi: Bạn là 1 con Robot SPAM!").addClass('captcha_status_error').fadeIn('slow');
                    }
                }
            });
        </script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?66NrVQ61M3QPmQUSbC0j6rIaZY2B5fw2";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<script type="text/javascript">

$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#duong_sang').offset().top-170
    }, 'fast');
});

</script>
<style type="text/css">
  .slideshow img
  {
    border: 3px solid white;
    border-radius: 5px;
  }
</style>
<script type="text/javascript">
	$(function(){
		$("#id_tim_kiem").autocomplete({
			source:'./display/right.php';
	});
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=185523392368694&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=185523392368694&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<meta property="fb:admins" content="100012038400608"/>

</head>

<body >
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

                    
      $sql = "select * from khachhang where tendangnhap ='$username' and matkhau =md5('$password') ";
           
      $rows=$db->query($sql);
                        $rs = $rows->fetch();
      if (!empty($rs))
                            {
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý
        $_SESSION['login_member']='ok';
        $_SESSION['tendangnhap'] = $username;
                             }
                            else
                            {
                                
                            }
                            
                    
                    }
           
?>
	<header class="header">
		<nav class="top-nav">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="./images/source/logo-waka.png"></a>
				</div>

				<form action="index.php?page=timkiem" method="get">
					<div class="topsearch">

            <div id="skills" name="skill_tim_kiem">
              <input style="display: none;" type="text" placeholder="Nhập từ khóa..." id="id_tim_kiem" name="page" value="timkiem">
            </div>
						<div class="input-field first-wrap" id="skills" name="skill_tim_kiem">
							<input type="text" placeholder="Nhập từ khóa..." id="id_tim_kiem" name="key">
						</div>

						<div class="input-field second-wrap">
							<button type="submit" class="btn-search"><i class="fa fa-search"></i> Tìm kiếm</button>
						</div>

					</div>
	
				</form>

                    <div class="shop-nav">
                        <?php
                            if(!isset($_SESSION['login_member']))
                            {
                        ?>
                        <ul id="shopnav" class="shop-menu">
                            <li>
 					<a href="index.php?page=register"><button class="btnx">
						ĐĂNG KÍ
					</button></a>                                                     
                            </li>
                            <li>

					<button onclick="document.getElementById('id01').style.display='block'" class="btnx">
						ĐĂNG NHẬP
					</button>            
<div id="id01" class="modal" style="z-index: 100;">
  
  <form class="modal-content" action="" method="post" style="padding: 30px;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container_login">
      <label for="uname"><b>Tên đăng nhập</b></label><br>
      <input class="input_login" type="text" placeholder="Nhập tên đăng nhập" name="tendangnhap" required><br>

      <label for="psw"><b>Mật khẩu</b></label><br>
      <input class="input_login" type="password" placeholder="Nhập mật khẩu" AUTOCOMPLETE="off" name="matkhau" required>
        
      <button class="button_login" class="single_add_to_cart_button button alt" type="submit">Đăng nhập</button>

    </div>
   
    <div class="container_login" style="background-color:#f1f1f1">
   <span class="psw"> <a href="#">Quên mật khẩu?</a></span><br>
    </div>
  </form>


</div>                          
                            </li>
                        </ul>
                        <?php
                            }
                            else
                            {
                                $query= "select * from khachhang where tendangnhap='".$_SESSION['tendangnhap']."'";
                                $rows=$db->query($query);
                                $r=$rows->fetch();
                        ?>
                            <ul id="shopnav" class="shop-menu">
                            <li>
                                Xin chào: 
                                <a href="index.php?page=account&tendangnhap=<?php echo $r[0]?>" style="font-weight: bold;" title="Thông tin cá nhân.">
                                    <?php
                                        echo $r[3];
                                    ?>
                                 </a>               
                            </li>
                            
                            <li>
					<a href="index.php?page=logout" style="font-weight: bold;font-size: 1.2em;">
						[Thoát]
					</a>                                  
                            </li>
                        </ul>
                        <?php
                            }
                        ?>
                    </div> 
			</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		</nav>
		<section class="container">
			<div class="slideshow">

				<a href="#"><img src="./images/source/1.jpg" alt="picture of slide show"></a>

				<a href="#"><img src="./images/source/2.jpg" alt="picture of slide show"></a>

				<a href="#"><img src="./images/source/3.jpg" alt="picture of slide show"></a>

				<a href="#"><img src="./images/source/4.jpg" alt="picture of slide show"></a>

				<div class="slidesjs-previous slidesjs-navigation"><span class="fa fa-angle-left fa-3x"></span></div>

				<div class="slidesjs-next slidesjs-navigation"><span class="fa fa-angle-right fa-3x"></span></div>
			</div>
		</section>
	</header>

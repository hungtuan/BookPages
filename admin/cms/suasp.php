
 <?php
        
            $masp=$_REQUEST['masp'];
           // Lấy dữ liệu cũ
            $q= "select * from sach where masach=$masp";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
            
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
                if($_POST['slDM']=='no')
                {
                    $error[]='dm';
                }
                else
                {
                    $madmct=$_POST['slDM'];
                }
                if(empty($_POST['tensp']))
                {
                    $error[]='tensp';
                }
                else
                {
                    $tensp=$_POST['tensp']; 
                }
                if(empty($_POST['tentg']))
                {
                    $error[]='tentg';
                }
                else
                {
                    $tentg=$_POST['tentg']; 
                }
                if(empty($_POST['namxb']))
                {
                    $error[]='namxb';
                }
                else
                {
                    $namxb=$_POST['namxb']; 
                }
                 if(empty($_POST['giaban']))
                {
                    $error[]='giaban';
                }
                else
                {
                    $giaban=$_POST['giaban'];
                }
                 $link_pdf=$_FILES['link_pdf']['name'];
                 $link_epub=$_FILES['link_epub']['name'];
                 $ha=$_FILES['fImg']['name'];
                 $chitiet=$_POST['chitiet'];
                 if (empty($error))
                 {
                    //Lay du lieu tu form
                    $query = "update sach"
                            . " set tensach='$tensp', tentacgia='$tentg', namxb='$namxb', madmct=$madmct, giaban=$giaban, link_epub='$link_epub', link_pdf='$link_pdf', hinhanh='$ha', gioithieu='$chitiet'"
                            . "where masach=$masp";

                    //Thuc thi cau truy van
                    $count=$db->exec($query);

                    // Xu ly kq:
                    if($count>0)
                    {
                        move_uploaded_file($_FILES['link_pdf']['tmp_name'], "../ebook/epub/$link_pdf");
                        move_uploaded_file($_FILES['link_epub']['tmp_name'], "../ebook/pdf/$link_epub");
                        move_uploaded_file($_FILES['fImg']['tmp_name'], "../images/product/$ha");                        
                        header("location:?page=dssp");
                    }
                 }
        }
   ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3> Cập nhật sản phẩm</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label">Danh mục</label>
					<div class="controls">
                                            <select  class="span4" name="slDM" >
                                                <option value="no">-- Chọn danh mục --</option>
                                                
						<?php
                                                    $query = "select madmct, tendmct from danhmucchitiet order by tendmct asc";
                                                    $rows=$db->query($query);
                                                     foreach ($rows as $r1) 
                                                     {
                                                        echo "<option value='$r1[0]'";
                                                        if($r1[0]=$r[1])
                                                        echo 'selected';
                                                        echo ">$r1[1]</option>";
                                                     }
                                                 ?>
                                            </select>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('dm', $error))
                                                    {
                                                        echo "Mời chọn danh mục !";
                                                    }
                                                ?>
                                             </span>
					</div>
				</div>
                               
                                <div class="control-group">
                                    <label class="control-label">Tên sản phẩm</label>
                                        <div class="controls">
                                            <input type="text" name="tensp" class="span7" value="<?php if(isset($r)) echo $r[2]; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tensp', $error))
                                                    {
                                                        echo "Mời nhập tên sản phẩm !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               
                               <div class="control-group">
                                    <label class="control-label">Tác giả</label>
                                        <div class="controls">
                                            <input type="text" name="tentg" class="span6" value="<?php if(isset($r)) echo $r[7]; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tentg', $error))
                                                    {
                                                        echo "Mời nhập tên tác giả !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Năm xuất bản</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span2" name="namxb" value="<?php if(isset($r)) echo $r[8]; ?>"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('namxb', $error))
                                                    {
                                                        echo "Mời nhập năm xuất bản!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
				</div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Giá bán</label>
                                    <div class="controls">
                                        <div class="input-append">
                                            <input type="text" class="span8" name="giaban" value="<?php if(isset($r)) echo number_format ($r[3]); ?>"><span class="add-on">VNĐ</span>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('giaban', $error))
                                                    {
                                                        echo "Mời nhập giá bán!";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                    </div>
				</div>
                               
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Link Ebook Pdf</label>
                                        <div class="controls">
                                            <input type="file" name="link_pdf" value="<?php if(isset($r)) echo number_format ($r[5]); ?>"/>
                                        </div>
                </div>
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Link Ebook Epub</label>
                                         <div class="controls">
                                            <input type="file" name="link_epub" value="<?php if(isset($r)) echo number_format ($r[4]); ?>"/>
                                        </div>
                </div>
                               <img src="../images/product/<?php echo $r[6]?>"
                               <div class="control-group">
                                    <label class="control-label">Hình ảnh</label>
                                        <div class="controls">
                                            <input type="file" name="fImg" />
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label">Chi tiết</label>
                                        <div class="controls">
                                            <textarea name="chitiet" class="ckeditor"><?php if(isset($r)) echo $r[11]; ?></textarea>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Cập nhật</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>

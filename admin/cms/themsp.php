
<?php
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
                    $giaban=0;
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
                    $query = "insert into sach(tensach, tentacgia, namxb ,madmct , giaban, link_pdf, link_epub, hinhanh, gioithieu,ngaydang) values('$tensp', '$tentg', '$namxb', '$madmct', $giaban,'$link_pdf', '$link_epub', '$ha', '$chitiet',CURDATE())";
                    
                    $count=$db->exec($query);
                    if($count>0)
                    {
                        move_uploaded_file($_FILES['link_pdf']['tmp_name'], "../ebook/pdf/$link_pdf");
                        move_uploaded_file($_FILES['link_epub']['tmp_name'], "../ebook/epub/$link_epub");
                        move_uploaded_file($_FILES['fImg']['tmp_name'], "../images/product/$ha");
                        echo '        <script type="text/javascript">
            alert("Th??m th??nh c??ng.")
        </script>';
                    }
                    else
                    {
                        echo $query ;
                    }
                }
            }

        ?>

                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Th??m m???i s???n ph???m</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label">Danh m???c</label>
					<div class="controls">
                                            <select  class="span4" name="slDM">
                                                <option value="no">-- Ch???n danh m???c --</option>
						<?php
      
                                                    $query = "select madmct, tendmct from danhmucchitiet order by tendmct asc";
                                                    $rows=$db->query($query);
                                                     foreach ($rows as $r) 
                                                     {
                                                        echo "<option value='$r[0]'>$r[1]</option>";
                                                     }
                                                 ?>
                                            </select>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('dm', $error))
                                                    {
                                                        echo "M???i ch???n danh m???c !";
                                                    }
                                                ?>
                                             </span>
					</div>
				</div>
                               
                                <div class="control-group">
                                    <label class="control-label">T??n s???n ph???m</label>
                                        <div class="controls">
                                            <input type="text" name="tensp" class="span7"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tensp', $error))
                                                    {
                                                        echo "M???i nh???p t??n s???n ph???m !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               <div class="control-group">
                                    <label class="control-label">T??c gi???</label>
                                        <div class="controls">
                                            <input type="text" name="tentg" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('tentg', $error))
                                                    {
                                                        echo "M???i nh???p t??n t??c gi??? !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">N??m xu???t b???n</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span2" name="namxb"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('namxb', $error))
                                                    {
                                                        echo "M???i nh???p n??m xu???t b???n!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
				</div>
                               
                               
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Gi?? b??n</label>
                                    <div class="controls">
                                       
                                            <input type="text" class="span3" name="giaban"/> VND
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('giaban', $error))
                                                    {
                                                        echo "M???i nh???p gi?? b??n!";
                                                    }
                                                ?>
                                             </span>
                                        
                                    </div>
				</div>
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Link Ebook Pdf</label>
                                        <div class="controls">
                                            <input type="file" name="link_pdf"/>
                                        </div>
				</div>
                               
                               <div class="control-group">
                                    <label class="control-label" for="basicinput">Link Ebook Epub</label>
                                         <div class="controls">
                                            <input type="file" name="link_epub"/>
                                        </div>
				</div>
                               
                               <div class="control-group">
                                    <label class="control-label">H??nh ???nh</label>
                                        <div class="controls">
                                            <input type="file" name="fImg"/>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <label class="control-label">Gi???i thi???u</label>
                                        <div class="controls">
                                            <textarea name="chitiet" class="ckeditor"></textarea>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Th??m m???i</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>


<?php
                        if($_SERVER["REQUEST_METHOD"]=='POST')
                        {
                            $error = array(); //Khoi tao mang loi rong
                            if($_POST['slDM']=='no')
                            {
                             $error[]='dm';
                            }
                            else
                            {
                               $madmc=$_POST['slDM'];
                            } 


                            if(empty($_POST['TenDM']))
                            {
                                $error[]='tendmct';
                            }
                            else
                            {
                                $tendm=$_POST['TenDM']; 
                            }
                            if (empty($error))
                            {
                                $query= "insert into danhmucchitiet(tendmct,madmc)"
                                        ."values('$tendm','$madmc')";
                                $dem=$db->exec($query);
                            }
                            
                        }
                    ?>
 
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Thêm mới danh mục</h3>
                      </div>
                    <form  action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                        <div class="control-group">
                            <label class="control-label">Tên danh mục</label>
				<div class="controls">
                                    <input type="text" name="TenDM" class="span8" id="tendmct">
                                        <span class="errors">
                                        <?php
                                            if(!empty($error) && in_array('tendmct', $error))
                                            {
                                                echo "Mời nhập tên danh mục !";
                                            }
                                        ?>
                                         </span>
				</div>
                <br>
                        <label class="control-label">Danh mục chính</label>
                    <div class="controls">
                                            <select  class="span4" name="slDM">
                                                <option value="no">-- Chọn danh mục --</option>
                        <?php
      
                                                    $query = "select madmc, tendmc from danhmucchinh order by tendmc asc";
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
                                                        echo "Mời chọn danh mục chính !";
                                                    }
                                                ?>
                                             </span>
                    </div>
			</div>   
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn-inverse" onclick='check()' >Thêm mới</button>      
                                <script type="text/javascript">
                                       function check()
					{
                                            if(document.getElementById('tendmct').value!="")
                                            {
                                                 alert("Thêm mới thành công");
                                            }
					}
                                 </script>
                            </div>
                        </div>
                     </form>
                 </div> 
                 </div>
             </div>


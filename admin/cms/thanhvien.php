             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Danh sách thành viên</h3>
                      </div>
                       
                       <?php
                            $query = "select * from khachhang order by tendangnhap desc ";
                            $rows=$db->query($query);
                            echo "<table class='table'>";
                            echo "<tr>"
                                    . "<th>Tên đăng nhập</th>"                                   
                                    . "<th>Họ tên</th>"
                                    . "<th>Email</th>"
                                    . "<th>Địa chỉ</th>"
                                    . "<th>Số điện thoại</th>"
                                    . "<th>Ngày tạo</th>"
                                    . "<th>Số xu</th>"
                                 . "</tr>";
                            foreach($rows as $r) 
                            {                
                                echo "<tr>"
                                        . "<td>$r[0]</td>"                               
                                        . "<td>$r[3]</td>"
                                        . "<td>$r[2]</td>"
                                        . "<td>$r[4]</td>"
                                         . "<td>$r[5]</td>"
                                            . "<td>$r[7]</td>"
                                                . "<td>$r[8]</td>"
                                     . "</tr>";

                            }
				
                            echo "</table>";

                            ?>


                                           </div> 
                                     </div>
                                 </div>


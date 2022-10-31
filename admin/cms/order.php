
<div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý nạp tiền</h3>
                      </div>
                       <div class="module-body table">
                           <form action="" method="post">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table 	display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tên đăng nhập
                                            </th>
                                            <th>
                                                 Số xu
                                            </th>
                                            <th>
                                                Thời gian
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "SELECT * FROM naptien where soxu!=0 and trangthai!=0";
                       
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {       
                                            echo "<tr>"                                                  
                                                    . "<td>$r[0]</td>"
                                                    . "<td>$r[1]</td>"
                                                    . "<td>$r[2]</td>"
                                                    
                                                    . "<td>";
                                       ?>    
                               
                                                    </td>
                                                 </tr>
                                        <?php
                                        }
                                     ?>
                                    </tbody> 
                                  
                                    </table>
 
                           </form>
                 </div>


                                           </div> 
                                     </div>
                                 </div>

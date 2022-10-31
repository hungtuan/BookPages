
<div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý mua sách của bạn đọc</h3>
                        <?php
                            $sql="select sum(dongia) from donhang";
                            $kq=$db->query($sql);
                            $row1=$kq->fetch();
                            echo "Tổng thu nhập: $row1[0] VNĐ";
                         ?>
                      </div>
                       <div class="module-body table">
                           <form action="" method="post">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tên đăng nhập
                                            </th>
                                            <th>
                                                 Tên sách
                                            </th>
                                            <th>
                                                Đơn giá
                                            </th>
                                            <th>
                                              Ngày mua
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "SELECT * FROM donhang JOIN sach on donhang.masach=sach.masach";
                       
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {       
                                            echo "<tr>"                                                  
                                                    . "<td>$r[1]</td>"
                                                    . "<td>$r[7]</td>"
                                                    . "<td>$r[8]</td>"
                                                    . "<td>$r[4]</td>"
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

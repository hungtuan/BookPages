
<script>
    function check(masp)
            {
                if(confirm("Bạn có muốn xóa sản phẩm này không ?")==true)
                {
                    //chuyen den trang xoa
                    window.location="index.php?page=xoasp&masp="+masp;
                }    
            }
    </script>
   
             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Quản lý danh sách sản phẩm</h3>
                      </div>
                       
                       <div class="module-body table">
                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table display"
                                width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tên sách
                                            </th>
                                            <th>
                                               Thể loại
                                            </th>
                                             <th>
                                                Tác giả
                                            </th>
                                            <th>
                                                Ngày đăng
                                            </th>
                                            <th>
                                                 Hình ảnh
                                            </th>
                                            <th>
                                                Chi tiết sách
                                            </th>                                                                                                         <th>
                                                Lượt xem
                                            </th>
                                                                                        <th>
                                                Lượt tải
                                            </th>            
                                            <th>
                                                Công cụ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "select * from sach join danhmucchitiet on sach.madmct=danhmucchitiet.madmct order by sach.madmct desc";
                  
                                        $rows=$db->query($query);
                                        foreach($rows as $r) 
                                        {                
                                            echo "<tr>"
                                                    . "<td>$r[2]</td>"
                                                    . "<td>$r[14]</td>"
                                                    . "<td>$r[7]</td>"
                                                    . "<td>".$r[12]."</td>"
                                                    . "<td><img src='../images/product/$r[6]' width='100px'/></td>"
                                                    . "<td>".substr($r[11], 0, 150 )."...</td>"
                    . "<td>$r[9]</td>"
                    . "<td>$r[10]</td>"
                                                    . "<td>"
                                                    . "<a href='index.php?page=suasp&masp=$r[0]' title='Edit'><img src='../cssjsadmin/images/edit.png' width='18px'/></a> "

                                                    ."<a onclick='check($r[0])' href='#' title='Delete'><img src='../cssjsadmin/images/delete.png'width='18px'/></a>"
                                                    . "</td>"
                                                 . "</tr>";

                                      }
                                      ?>
                                    </tbody> 
                                    <tfoot>
                                        <tr>
                                            <th>
                                                Tên sách
                                            </th>
                                            <th>
                                                Thể loại
                                            </th>
                                             <th>
                                                Giá bán
                                            </th>
                                            <th>
                                                Khuyến mãi
                                            </th>
                                            <th>
                                                 Hình ảnh
                                            </th>
                                            <th>
                                                Chi tiết
                                            </th>
                                            <th>
                                                Công cụ
                                            </th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    <a href='index.php?page=themsp'><button type='submit' class='btn-inverse'>Thêm mới</button></a>
                 </div>

            </div> 
         </div>
     </div>

  
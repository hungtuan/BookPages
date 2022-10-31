 <div class="span9">
 
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="?page=order" class="btn-box big span4"><i class="icon-comment-alt"></i><b>    <?php
        $q = "select count(*) from naptien";
             $rs = $db->query($q);
              $dh = $rs->fetch()[0]; 
              echo $dh;
     ?></b>
                                        <p class="text-muted">
                                            Lịch sử nạp tiền</p>
                                    </a><a href="?page=thanhvien" class="btn-box big span4"><i class="icon-user"></i><b>  <?php
        $q1 = "select count(*) from khachhang";
             $rs1 = $db->query($q1);
              $kh = $rs1->fetch()[0]; 
              echo $kh;
     ?></b>
                                        <p class="text-muted">
                                            Thành viên</p>
                                    </a><a href="?page=dssp" class="btn-box big span4"><i class="icon-book"></i><b><?php
        $q2 = "select count(*) from sach";
             $rs2 = $db->query($q2);
              $sp = $rs2->fetch()[0]; 
              echo $sp;
     ?></b>
                                        <p class="text-muted">
                                            Sách</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <a href="?page=tinnhan" class="btn-box big span4"><i class="icon-envelope"></i><b>    <?php
        $q = "select count(*) from phanhoi";
             $rs = $db->query($q);
              $tn = $rs->fetch()[0]; 
              echo $tn;
     ?></b>
                                        <p class="text-muted">
                                            Tin nhắn</p>
                                    </a>
<a href="?page=dstintuc" class="btn-box big span4"><i class="icon-magic"></i><b>  <?php
        $q1 = "select count(*) from tintucsach";
             $rs1 = $db->query($q1);
              $kh = $rs1->fetch()[0]; 
              echo $kh;
     ?></b>
                                        <p class="text-muted">
                                            Tin tức</p>
                                    </a>
                                          <a href="?page=orderdt" class="btn-box big span4"><i class="icon-money"></i><b>    <?php
        $q = "select count(*) from donhang";
             $rs = $db->query($q);
              $tn = $rs->fetch()[0]; 
              echo $tn;
     ?></b>
                                        <p class="text-muted">
                                            Mua sách</p>
                                    </a>                                   
                                </div>
                                <div class="btn-box-row row-fluid">

                                    
                                </div>
                            </div>
                            <?php
                            
                            ?>

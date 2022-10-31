<?php
    include '../admin/includes/connect.php';
    $getData=$_GET['term'];
    $dsdm="select * from sach where tensach like '%".$getData."%'";
    $dong=$db->query($dsdm);
    foreach ($dong as $d)
    {
        $data[]=$d[0];
    }
    echo json_encode($data)
 ?>

                                    

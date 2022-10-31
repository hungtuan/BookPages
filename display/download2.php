<?php
if(isset($_REQUEST['masach']))
{
    $id = $_REQUEST['masach'];
    $stat = $db->prepare("select * from sach where masach=?");
    $sql="update sach set soluongtai=soluongtai+1 where masach=$id";
    $dong=$db->query($sql);
    $stat->bindParam(1, $id);
    $stat->execute();
    $data = $stat->fetch();

    $file = './ebook/pdf/'.$data['link_pdf'];

    if(file_exists($file)){
        header('Content-Description: File Transfer');
        header('Content-Type:application/pdf ');
        header('Content-Disposition:attachment; filename="'.basename($file).'"');
        header('Expires:0 ');
        header('Cache-Control: must-revalidate');
        header('Pragma:public');
        header('Content-Length: '.filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}
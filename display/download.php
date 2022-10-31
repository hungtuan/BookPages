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

    $file = './ebook/epub/'.$data['link_epub'];

    if(file_exists($file)){
        header('Content-Description: '. $data['link_epub']);
        header('Content-Type:application/epub ');
        header('Content-Disposition:attachment; filename="'.basename($file).'"');
        header('Expires:0 ');
        header('Cache-Control: '.data['cache']);
        header('Pragma:public');
        header('Content-Length: '.filesize($file));
                ob_clean();
        flush();
        readfile($file);
        exit;
    }
}
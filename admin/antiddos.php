<?php
error_reporting(0);
$text=$HTTP_SERVER_VARS['QUERY_STRING'];
$text = preg_replace("#php\&#si",'php?',$text);
echo '<div style="width: 300px; height: 200px;border: 1px solid rgba(0, 0, 0, 0.2);margin: 0 auto;border-radius: 10px;box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.1);margin-top: 150px;">
	<img  style="padding: 40px 40px;height: 75px"src="../images/source/logo-waka.png">
	<center><a id="click" style="text-decoration: none;color: white;font-weight: bold;background-color:#e74c3c;border-radius: 10px;padding: 10px" href=http://localhost:8080/project1/admin'.$text.'>CLICK VÀO ĐÂY ĐỂ TIẾP TỤC</a><br></center>
	<style type="text/css">
		#click:hover
		{
			background-color: #EC7063;
		}
	</style>
</div>';
?>

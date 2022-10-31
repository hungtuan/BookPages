<footer class="footer" class="clearfix">
	<script type="text/javascript">
		$().ready(function(){
			$(window).scroll(function(){
				var top = $(this).scrollTop();
				if(top > 100){
					$("#top1").fadeIn('slow');
				}else {
					$("#top1").fadeOut('slow');
				}
			});
			$("#top1").click(function(){
				$("body").animate({scrollTop:0},1000);
			});
		});
	</script>
	<style type="text/css">
		#top1 {
			position: fixed;
			right: 10px;
			bottom: 60px;
			display: none;
		}
	</style>
	<a href="#" id="top1"><img src="./images/source/r-totop-icon.png" title="Lên đầu trang." /></a>
            <b class="copyright">&copy; 2018 - VTSBook </b>All rights reserved.
</footer>
<!-- ********************************************************* -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.slides.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>

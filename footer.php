		<div id="footerBorder">
			<div class="fLeft"><img src="images/headerBorder_left.png" alt="" width="45" height="5" /></div>
			<div id="midBorder"></div>
			<div class="fLeft"><img src="images/headerBorder_right.png" alt="" width="45" height="5" /></div>
			<div class="clearer"></div>
		</div> <!-- /#headerBorder -->
		<div id="footerNav">
			<a href="./" class="footerNav">Red Saree HOME</a> &nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="?page=contactUs" class="footerNav">CONTACT Red Saree</a><br />
			<?php
				if ($_SERVER['SERVER_NAME'] == 'localhost')
				{
					echo '<a href="http://www.redsaree.com.ph/" class="copy">&copy;</a>';
				}
				else
				{
					echo '<a href="http://localhost/MyWeb/redsaree/www/" class="copy">&copy;</a>';
				}
			?> 2011 Red Saree Philippines &nbsp;&nbsp;|&nbsp;&nbsp;
			<script language="JavaScript" type="text/javascript">
				function win1() {
					window.open("privacy.php","Privacy","menubar=no,width=600,height=360,toolbar=no,scrollbars=yes");
				}
			</script>
			<a onmouseover="self.status='Privacy Policy'; return true;" href="javascript:win1()" class="footerNav">Privacy Policy</a>
		</div> <!-- /footerNav -->
		<div id="footerIcon">
			<span id="findUs">Find us at: &nbsp;</span>
			<a href="http://www.facebook.com/" target="_blank">
				<img src="images/facebook.png" alt="Facebook" title="Facebook" width="32" height="32" border="0" /></a> &nbsp;
			<a href="http://www.twitter.com/" target="_blank">
				<img src="images/twitter.png" alt="Twitter" title="Twitter" width="32" height="32" border="0" /></a> &nbsp;
			<!--//
			<a href="http://www.linkedin.com/" target="_blank">
				<img src="images/linkedin.png" alt="LinkedIn" title="LinkedIn" width="34" height="34" border="0" /></a>
			//-->
		</div> <!-- /footerIcon -->

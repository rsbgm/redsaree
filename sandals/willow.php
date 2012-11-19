<div class="bodyOrderPage">
<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider2" class="sliderwrapper2 fLeft">

	<div class="contentdiv">
	<img src="images/sandals/willow_black_400.jpg" />
	<img src="images/sandals/willow_black_front.jpg" class="fLeft" width="100" height="67" />
	<img src="images/sandals/willow_black_side1.jpg" class="fLeft" width="100" height="67" />
	<img src="images/sandals/willow_black_side2.jpg" class="fLeft" width="100" height="67" />
	<img src="images/sandals/willow_black_top.jpg" class="fLeft" width="100" height="67" />
	</div>

	<div class="contentdiv">
	<img src="images/sandals/willow_brown_400.jpg" />
	<img src="images/sandals/willow_brown_front.jpg" class="fLeft" width="100" height="67" />
	<img src="images/sandals/willow_brown_side1.jpg" class="fLeft" width="100" height="67" rel="imgtip[5]" />
	<img src="images/sandals/willow_brown_side2.jpg" class="fLeft" width="100" height="67" />
	<img src="images/sandals/willow_brown_top.jpg" class="fLeft" width="100" height="67" />
	</div>

	<div class="contentdiv">
	<img src="images/sandals/willow_mocha_400.jpg" />
	<img src="images/sandals/willow_mocha_front.jpg" class="fLeft" width="100" height="67" rel="imgtip[8]" />
	<img src="images/sandals/willow_mocha_side1.jpg" class="fLeft" width="100" height="67" rel="imgtip[9]" />
	<img src="images/sandals/willow_mocha_side2.jpg" class="fLeft" width="100" height="67" rel="imgtip[10]" />
	<img src="images/sandals/willow_mocha_top.jpg" class="fLeft" width="100" height="67" rel="imgtip[11]" />
	</div>

</div>

<div id="paginate-slider2" class="pagination2 fLeft">

	<br /><br /><br /><br />
	<h3 style="color:black;"><?php echo $pageTitle; ?></h3>
	<br />
	<p style="color:black;font-size:x-small;">COLOR</p>
	<a href="#" class="toc" style="color:black;">&bull;</a>
	<a href="#" class="toc" style="color:brown;">&bull;</a>
	<a href="#" class="toc" style="color:#D8AE7F;">&bull;</a>
	<br /><br />
	<ul style="position:relative;left:12px;color:black;font-size:x-small;">
		<li>handmade</li>
		<li>genuine leather upper</li>
		<li>synthetic outsole</li>
		<li>slip on</li>
		<li>&frac12; inch heel</li>
	</ul>
	<br />
	<p style="color:black;font-size:x-small;">AVAILABLE SIZES:</p>
	<p style="color:black;font-size:x-small;">5 &nbsp; 6 &nbsp; 7 &nbsp; 8 &nbsp; 9</p>
	<br />
	<p style="color:black;font-size:x-small;">PRICE: <b>Php950.00</b></p>
	<br />
	<p style="color:black;font-size:x-small;">SELECT QTY:</p>
	<select>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>


</div>

<div class="clearer"></div>
<p style="position:relative;left:100px;top:10px;color:black;font-size:x-small;">Mouse over to view a larger picture.</p>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider2",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide. For ex: ["Previous", "Next"].
	revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [false, 7000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>

</div>
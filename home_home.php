<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider1" class="sliderwrapper">

	<div class="contentdiv">
	<img src="images/homeBanners/image001.jpg" />
	<br />
	<p><a href="javascript:featuredcontentslider.jumpTo('slider1', 3)">Go to 3rd slide</a></p>
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image002.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image005.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image006.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image007.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image008.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image009.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image010.jpg" />
	</div>
	<div class="contentdiv">
	<img src="images/homeBanners/image011.jpg" />
	</div>

</div>

<div id="paginate-slider1" class="pagination">

	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>
	<a href="#" class="toc">&bull;</a>

</div>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide. For ex: ["Previous", "Next"].
	revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.1],  //[true/false, fadedegree]
	autorotate: [true, 8000],  //[true/false, pausetime]
	onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
		//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
	}
})

</script>


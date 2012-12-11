<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider1" class="sliderwrapper">

	<?php
	$cnt = 24;
	for ($i = 1; $i <= $cnt; $i++)
	{
		$x = $i;
		if (strlen($x) == 1) $x = '00'.$x;
		if (strlen($x) == 2) $x = '0'.$x;
		if ($i <> 8)
		{ ?>
			<div class="contentdiv">
				<img src="images/homeBanners/image<?php echo $x; ?>.jpg" />
			</div>
			<?php
		}
	}
	?>

</div>

<div id="paginate-slider1" class="pagination">

	<?php
	for ($i = 1; $i <= ($cnt - 1); $i++)
	{ ?>
		<a href="#" class="toc">&bull;</a>
		<?php
	}
	?>

</div>

<script type="text/javascript">

	featuredcontentslider.init({
		id: "slider1",  //id of main slider DIV
		contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
		toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
		nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide. For ex: ["Previous", "Next"].
		revealtype: "mouseover", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
		enablefade: [true, 0.1],  //[true/false, fadedegree]
		autorotate: [true, 5000],  //[true/false, pausetime]
		onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
			//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
			//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
		}
	})

</script>


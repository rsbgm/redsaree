<div class="bodyOrderPage">
<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

	<div id="slider2" class="sliderwrapper2 fLeft">

		<?php
			$clr_ary = array(
				'riogrande' => 2,
				'willow' => 2,
				'pleasant' => 2,
				'popsicle' => 2,
				'wave' => 6,
				'capetown' => 1,
				'kite' => 3,
				'basket' => 3,
				'feather' => 2,
				'frills' => 2,
				'candy' => 5,
				'eve' => 3,
				'castle' => 3,
				'ashley' => 2,
				'polly' => 4,
				'izzy' => 4,
				'duchess' => 2,
				'kate' => 2,
				'chrissy' => 3,
				'carmen' => 3,
				'sydney' => 3,
				'frances' => 2,
				'lindsay' => 3,
				'andie' => 3,
				'zebra' => 1,
				'jem' => 2,
				'lee' => 2,
				'elle' => 1,
				'kenya' => 1,
				'valley' => 3,
				'leo' => 2,
				'tammy' => 3
			);
		
			$i = 0;
			switch ($design) {
				case "riogrande":
					$ii = $i;
					break;
				case "willow":
					$ii = $i + (4 * $clr_ary['riogrande']);
					break;
				case "pleasant":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow']));
					break;
				/*case "palm":
					$ii = $i + 24; //32; //36;
					break;*/
				case "popsicle":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant']));
					break;
				case "wave":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle']));
					break;
				/*case "miramar":
					$ii = $i + 88;
					break;*/
				case "capetown":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave']));
					break;
				case "kite":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown']));
					break;
				case "basket":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite']));
					break;
				case "feather":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket']));
					break;
				case "frills":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather']));
					break;
				/*case "madagascar":
					$ii = $i + 124;
					break;
				case "leopard":
					$ii = $i + 126;
					break;*/
				case "candy":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills']));
					break;
				case "eve":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy']));
					break;
				case "castle":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve']));
					break;
				case "ashley":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle']));
					break;
				case "polly":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley']));
					break;
				case "izzy":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly']));
					break;
				case "duchess":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy']));
					break;
				case "kate":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess']));
					break;
				case "chrissy":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate']));
					break;
				case "carmen":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy']));
					break;
				case "sydney":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen']));
					break;
				case "frances":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney']));
					break;
				case "lindsay":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances']));
					break;
				case "andie":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay']));
					break;
				case "zebra":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie']));
					break;
				case "jem":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra']));
					break;
				case "lee":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra'] + $clr_ary['jem']));
					break;
				case "elle":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra'] + $clr_ary['jem'] + $clr_ary['lee']));
					break;
				case "kenya":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra'] + $clr_ary['jem'] + $clr_ary['lee'] + $clr_ary['elle']));
					break;
				case "valley":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra'] + $clr_ary['jem'] + $clr_ary['lee'] + $clr_ary['elle'] + $clr_ary['kenya']));
					break;
				case "leo":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra'] + $clr_ary['jem'] + $clr_ary['lee'] + $clr_ary['elle'] + $clr_ary['kenya'] + $clr_ary['valley']));
					break;
				case "tammy":
					$ii = $i + (4 * ($clr_ary['riogrande'] + $clr_ary['willow'] + $clr_ary['pleasant'] + $clr_ary['popsicle'] + $clr_ary['wave'] + $clr_ary['capetown'] + $clr_ary['kite'] + $clr_ary['basket'] + $clr_ary['feather'] + $clr_ary['frills'] + $clr_ary['candy'] + $clr_ary['eve'] + $clr_ary['castle'] + $clr_ary['ashley'] + $clr_ary['polly'] + $clr_ary['izzy'] + $clr_ary['duchess'] + $clr_ary['kate'] + $clr_ary['chrissy'] + $clr_ary['carmen'] + $clr_ary['sydney'] + $clr_ary['frances'] + $clr_ary['lindsay'] + $clr_ary['andie'] + $clr_ary['zebra'] + $clr_ary['jem'] + $clr_ary['lee'] + $clr_ary['elle'] + $clr_ary['kenya'] + $clr_ary['valley'] + $clr_ary['leo']));
					break;
			}
			while ($i != $countColors) { ?>
				<div class="contentdiv">
					<img class="hand" src="images/<?php echo $category.'/'.$design.'_'.$designColors[$design][$i]; ?>_400.jpg" />
					<img src="images/<?php echo $category.'/'.$design.'_'.$designColors[$design][$i]; ?>_front.jpg" class="fLeft" width="100" height="67" rel="imgtip[<?php echo $ii; ?>]" />
					<img src="images/<?php echo $category.'/'.$design.'_'.$designColors[$design][$i]; ?>_side1.jpg" class="fLeft" width="100" height="67" rel="imgtip[<?php echo $ii+1; ?>]" />
					<img src="images/<?php echo $category.'/'.$design.'_'.$designColors[$design][$i]; ?>_side2.jpg" class="fLeft" width="100" height="67" rel="imgtip[<?php echo $ii+2; ?>]" />
					<img src="images/<?php echo $category.'/'.$design.'_'.$designColors[$design][$i]; ?>_top.jpg" class="fLeft" width="100" height="67" rel="imgtip[<?php echo $ii+3; ?>]" />
				</div>
				<?php $i++;
				$ii = $ii + 4;
			}
		?>

	</div>

	<div id="paginate-slider2" class="pagination2 fLeft">

		<!--DESIGN-->
		<br /><br />
		<?php
		// for new items, add red colored text 'NEW'
		if ($pageTitle == 'Chrissy' OR $pageTitle == 'Carmen' OR $pageTitle == 'Sydney' OR $pageTitle == 'Tammy') { $new_item = '<span class="new_item" style="font-size:14px;padding-left:10px;">New!</span>'; }
		
		// for on sale items, add red colored text 'On Sale'
		elseif ($pageTitle == 'Castle' OR $pageTitle == 'Basket' OR $pageTitle == 'Candy' OR $pageTitle == 'Frills') { $new_item = '<span class="new_item" style="font-size:14px;padding-left:10px;">On Sale!</span>'; }
		
		// for sold out items, add red colored text 'Sold Out'
		elseif ($pageTitle == 'Feather' OR $pageTitle == 'Ashley') { $new_item = '<span class="new_item" style="font-size:14px;padding-left:10px;">Sold Out!</span>'; }
	
		else $new_item = '';
		?>
		<h3 style="color:black;"><?php echo $pageTitle.$new_item; ?></h3>
		<br />
		
		<!--COLOR-->
		<p class="viewfont" style="line-height:20px;">COLORS ( Mouseover to see )<br />
		<?php
			$i = 0;
			while ($i != $countColors) { ?>
				<a href="" class="toc" name="<?php echo $designColors[$design][$i]; ?>" title="<?php echo $designColors[$design][$i]; ?>">
					<span class="clr<?php echo $designColors[$design][$i]; ?>">&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<span style="color:black;">&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $designColors[$design][$i]; ?></span>
				</a>
					<?php
					if ($pageTitle == 'Pleasant')
					{	
						if ($designColors[$design][$i] == 'white') echo '<span style="color:red;">< new color</span>';
					}
					if ($pageTitle == 'Wave' OR $pageTitle == 'Feather')
					{
						if ($designColors[$design][$i] == 'brown' OR $designColors[$design][$i] == 'maroon' OR $designColors[$design][$i] == 'white') echo '<span style="color:red;">< new color</span>';
					}
					if ($pageTitle == 'Feather')
					{
						if ($designColors[$design][$i] == 'black') echo '<span style="color:red;">< new color</span>';
					}
					if ($pageTitle == 'Duchess')
					{
						if ($designColors[$design][$i] == 'red') echo '<span style="color:red;">< <u>SOLD OUT!</u></span>';
					}
					?>
				<br />
			<?php $i++; } ?>
		</p>
		<br />
		
		<!--DESCRIPTION-->
		<ul style="list-style-position:inside;" class="viewfont">
			<?php $i = 0;
			while ($i < count($designDesc[$design])) {
				echo '<li>'.$designDesc[$design][$i].'</li>';
				$i++;
			}
			?>
		</ul>

		<!--SIZES-->
		<br />
		<p class="viewfont">AVAILABLE SIZES:</p>
		<?php
		switch ($design)
		{
			case 'tammy':
				echo '<p class="viewfont">5 &nbsp; 6 &nbsp; 7 &nbsp; 8 &nbsp; 9 &nbsp; 10</p>';
			break;
			
			default:
				echo '<p class="viewfont">5 &nbsp; 6 &nbsp; 7 &nbsp; 8 &nbsp; 9</p>';
		}
		?>
		<br />
		
		<!--PRICE-->
		<p class="viewfont">PRICE: <b>
			<?php
			if ($design == 'castle' OR 
				$design == 'basket' OR 
				$design == 'candy' OR 
				$design == 'frills' OR 
				$design == 'feather') 
				echo '<span style="color:red;">Php500.00</span>';
			elseif (
				$design == 'izzy' OR 
				$design == 'frances' OR 
				$design == 'lindsay') 
				echo 'Php950.00';
			elseif (
				$design == 'ashley' OR 
				$design == 'polly' OR 
				$design == 'duchess' OR
				$design == 'zebra' OR
				$design == 'jem' OR
				$design == 'lee' OR
				$design == 'andie' OR
				$design == 'kenya' OR
				$design == 'valley' OR
				$design == 'leo' OR
				$design == 'tammy') 
				echo 'Php750.00';
			elseif (
				$design == 'chrissy') 
				echo 'Php1,200.00';
			elseif (
				$design == 'andie') 
				echo 'Php650.00';
			else echo $shoeprices[$category];
			?>
			</b></p>
		<br />

		<div class="center">
			<!--
			<input type="button" value="Get Your Shoes Now!" onclick="window.location.assign('./?page=orderPage&category=<?php echo $category; ?>&design=<?php echo $design; ?>')";/>
			-->
			<input type="button" value="Get Your Shoes Now!" onclick="window.location.assign('./?page=howToOrder')";/>
		</div>
		<br />
		
		

	</div>

	<div class="clearer" style="width:100%;text-align:center;">
	<p style="position:relative;top:10px;" class="viewfont">( Mouse over thumbnails to view larger pictures. )</p><br />
	</div>


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


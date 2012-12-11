				<div class="whiteBg">
					<a href="?page=newArrivals"><img src="images/menu_newArrivals.jpg" class="gradualfader" /></a>
				</div>
				<div class="sidebarHrBorderHeight"></div>

				<?php
				/*
				| ------------------------------------------
				| Sidebar category menu (shoe style)
				*/
				$i = 0;
				while ($i < count($categories)) { ?>
					<div class="whiteBg <?php if ((count($categories)-$i) != 1) echo 'clipbtm'; ?>">
						<a href="?page=shopWindow&category=<?php echo $categories[$i]; ?>"><img src="images/menu_<?php echo $categories[$i]; ?>.jpg" class="gradualfader" /></a>
					</div>
					<?php
					/*
					| ------------------------------------------
					| Sidebar subcategory menu (designs)
					*/
					if ( ! empty($category)) { ?>
						<div style="display:<?php if ($category != $categories[$i]) echo 'none'; ?>;">
							<ul class="viewfont">
							<?php $ii = 0;
							while ($ii < count($categoryDesigns[$category])) { ?>
								<li><a href="?page=view&design=<?php echo $categoryDesigns[$category][$ii]; ?>&category=<?php echo $category; ?>">
									<?php 
									echo $categoryDesigns[$category][$ii+1]; 
									if ($categoryDesigns[$category][$ii+1] == 'Tammy' OR $categoryDesigns[$category][$ii+1] == 'Carmen__')
									{ 
										echo '<span class="new_item" style="font-size: 9px;display: inline-block;line-height: 8px;padding-left: 10px;">New</span>';
									} 
									if ($categoryDesigns[$category][$ii+1] == 'Castle' OR $categoryDesigns[$category][$ii+1] == 'Basket' OR $categoryDesigns[$category][$ii+1] == 'Candy' OR $categoryDesigns[$category][$ii+1] == 'Frills') 
									{ 
										echo '<span class="new_item" style="font-size: 9px;display: inline-block;line-height: 8px;padding-left: 10px;">On Sale!</span>'; 
									}
									if ($categoryDesigns[$category][$ii+1] == 'Feather' OR $categoryDesigns[$category][$ii+1] == 'Ashley')
									{ 
										echo '<span class="new_item" style="font-size: 9px;display: inline-block;line-height: 8px;padding-left: 10px;"><u>Sold Out</u></span>';
									} 
									?>
								</a></li>
							<?php $ii+=2; } ?>
							</ul>
						</div>
					<?php }
				$i++; } ?>

				<div class="sidebarHrBorderHeight"></div>

				<div class="whiteBg">
					<?php $month = getdate(); ?>
					<a href="?page=events&month=<?php echo strtolower($month['month']).$month['year']; ?>"><img src="images/menu_events.jpg" class="gradualfader" /></a>
				</div>
					<div style="display:<?php if ($page != 'events') echo 'none'; ?>">
						<ul class="vewfont">
							<li><a href="?page=events&month=december2012">December 2012</a></li>
							<li><a href="?page=events&month=november2012">November 2012</a></li>
							<li><a href="?page=events&month=july2012">July 2012</a></li>
							<li><a href="?page=events&month=april2012">April 2012</a></li>
							<li><a href="?page=events&month=march2012">March 2012</a></li>
							<li><a href="?page=events&month=november2011">November 2011</a></li>
							<li><a href="?page=events&month=october2011">October 2011</a></li>
							<li><a href="?page=events&month=september2011">September 2011</a></li>
						</ul>
					</div>
				
				<div class="sidebarHrBorderHeight"></div>

				<div class="whiteBg">
					<a href="?page=contactUs"><img src="images/menu_contactUs.jpg" class="gradualfader" /></a>
				</div>
				<div class="sidebarHrBorderHeight"></div>
				
				<div class="whiteBg" style="height:100%;padding:5px;display:none;">
					<img src="images/image_v_002.jpg" height="100" />
				</div>

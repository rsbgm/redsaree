			<div id="insideBody">
				<?php
				if (isset($_GET['month']))
				{
					switch ($_GET['month'])
					{
						case 'december2012': ?>
							<h1 style="margin: 20px 20px 10px 20px;">December events!</h1>
							<img src="images/events/20121201-05/super-sale.jpg" alt="Super Sale" style="margin:0 25px 20px;" width="550" />
							<?php
							break;
						case 'july2012': ?>
							<h1 style="margin: 20px 20px 10px 20px;">July events!</h1>
							<img src="images/events/20120713-15/july_supersale.jpg" alt="Super Sale" style="margin:0 25px 20px;" width="550" />
							<?php
							break;
						case 'april2012': ?>
							<h1 style="margin: 20px 20px 10px 20px;">April events!</h1>
							<img src="images/events/20120414-15/shop-at-the-fort.jpg" alt="Shop At The Fort" style="margin:0 25px 20px;" width="550" />
							<?php
							break;
						case 'march2012': ?>
							<h1 style="margin: 20px 20px 10px 20px;">March events!</h1>
							<img src="images/events/20120302-04/march supersale.jpg" alt="Super Sale" style="margin:0 25px 20px;" width="550" />
							<?php
							break;
						case 'november2011': ?>
							<h1 style="margin: 20px 20px 10px 20px;">November events!</h1>
							<img src="images/events/20111126-30/St-James-the-Great-Bazaar.jpg" alt="St. James The Great Bazaar - Ceunca, Ayala Alabang" style="margin:0 25px 20px;"/>
							<?php
							break;
						case 'october2011': ?>
							<h1 style="margin: 20px 20px 0 20px;">October events!</h1>
							<br /><br />
							<div class="events_ad_banner">
								<h3>Rotary Bazaar at Cuenca, Ayala Alabang (Oct. 16-17)</h3>
								<img src="images/events/20111016-17/Rotary Ad.jpg" alt="Rotary Bazaar" />
							</div>
							<div class="events_ad_banner">
								<h3>Trendsetter's Bazaar (Oct. 7-9)</h3>
								<img src="images/events/20111007-09/Trendsetters Bazaar Poster.jpg" alt="Trendsetters Bazaar" />
							</div>
							<?php
							break;
						case 'september2011': ?>
							<h1 style="margin: 20px 20px 0 20px;">September events!</h1>
							<img src="images/events/20110924-25/Carewell bazaar poster.jpg" alt="Carewell Bazaar" />
							<?php
							break;
						default:
							$month = getdate(); ?>
							<div class="justInfo">
								<p>There are no activites for the month of <?php echo $month['month'].' '.$month['year']; ?>.</p><br />
								<p>Please feel free to contact us for forthcoming events.</p><br /><br />
								<a href="mailto:inquire@redsaree.com.ph"><h1>inquire@redsaree.com.ph</h1></a>
								<h1>+63.917.8181004</h1>
								<h1>+63.917.8181005</h1>
							</div>
							<?php
					}
				}
				else
				{ ?>
					<?php
				} ?>
			</div>

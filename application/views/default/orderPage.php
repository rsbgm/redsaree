			<div id="insideBody">
				<div class="fLeft" style="width:300px;padding:0 20px;margin:30px 0;border-right:0px dashed gray;">
					<h3>How do I Order?</h3><br />
					<p>1. Fill up the order form properly. <span style="font-size:x-small;color:gray;"><em>(We assure you that all information will be kept confidential.)</em></span></p><br />
					<p>2. Upon submission, you will receive a confirmation of your order via email. <span style="font-size:x-small;color:gray;"><em>(Please check all your inboxes, including your spam folder just in case our confirmation email goes there.)</em></span></p><br />
					<p>3. Red Saree will contact you to confirm your order, payment, and delivery details.</p><br />
					<h3>How do I get my order?</h3><br />
					<p>4. Possible pick up points are:</p><br />
					<ul style="list-style-type:disc;list-style-position:inside;">
						<li style="position:relative;left:20px;">Wack Wack Heights, Mandaluyong</li>
						<li style="position:relative;left:20px;">Galleria de Magallanes, Makati</li>
					</ul>
					<br />
					<p>5. For deliveries, fees are as follows:</p><br />
					<ul style="list-style-type:disc;list-style-position:inside;">
						<li style="position:relative;left:20px;">Within Metro Manila: P50-80</li>
						<li style="position:relative;left:20px;">Outside Metro Manila: P100-150</li>
					</ul>
					<br />
					<h3>How do I pay?</h3><br />
					<p>6. Payments are in cash. Up front for pick up, and, deposit to the following if for delivery:</p><br />
					<ul style="list-style-type:disc;list-style-position:inside;">
						<li style="position:relative;left:20px;">BPI</li>
						<li style="position:relative;left:20px;">BDO</li>
						<li style="position:relative;left:20px;">GCash</li>
					</ul>
					<br />
					<p><span style="font-size:x-small;color:gray;"><em>(<a href="?page=contactUs" style="color:red;">Red Saree</a> will inform you of the bank details in the confirmation email.)</em></span></p>
				</div>
				<div id="orderPageRight" class="fLeft" style="width:260px;">
					<a name="form"></a>
					<div id="formProper">
						<!--====================================================================bof form-->
						<form id="orderForm1" method="post" action="register.php" onsubmit="return checkform()">
							<div style="position:relative;left:16px;margin:5px 0 8px 0;">Order Details: <span style="color:red;font-size:x-small;">*</span></div>
							<div class="fLeft">
								<div class="formLabel2"><label for="category" class="">Category:</label></div>
								<div class="formLabel2"><label for="design" class="">Design:</label></div>
								<div class="formLabel2"><label for="color" class="">Color:</label></div>
								<div class="formLabel2"><label for="size" class="">Size:</label></div>
								<div class="formLabel2"><label for="qty" class="">Qty:</label></div>
							</div>
							<div>
								<div class="formField2"><select id="orderFormShoeCategory" name="category" onchange="categoryFillUp()">
									<option value="">[select one]</option>
									<?php
										if (isset($_GET['category'])) $category = $_GET['category'];
										$i = 0;
										while ($i < count($categories)) { ?>
											<option value="<?php echo $categories[$i]; ?>" <?php if ($categories[$i] == $category) echo "selected='selected'"; ?>><?php echo ucfirst($categories[$i]); ?></option>
										<?php $i++; }
									?>
								</select></div>
								<div class="formField2"><select id="orderFormShoeDesign" name="design" onchange="categoryFillUp2()">
									<?php
										if (isset($_GET['category'])) {
											$i = 0;
											echo "<option>[select one]</option>";
											while ($i < count($categoryDesigns[$category])) { ?>
												<option value="<?php echo $categoryDesigns[$category][$i]; ?>" <?php if (isset($_GET['design']) && ($_GET['design'] == $categoryDesigns[$category][$i])) echo "selected='selected'"; ?>><?php echo ucfirst($categoryDesigns[$category][$i]); ?></option>
											<?php $i+=2; }
										} else {
											echo "<option>[select category first]</option>";
										}
									?>
								</select></div>
								<div class="formField2"><select id="orderFormShoeColor" name="color">
									<?php if (isset($_GET['category']) && isset($_GET['design'])) {
										$ii = 0;
										echo "<option>[select one]</option>";
										while ($ii < count($designColors[$_GET['design']])) { ?>
											<option value="<?php echo $designColors[$_GET['design']][$ii]; ?>"><?php echo ucfirst($designColors[$_GET['design']][$ii]); ?></option>
										<?php $ii++; }
									} else { ?>
										<option></option>
										<option>&nbsp;</option>
									<?php } ?>
								</select></div>
								<div class="formField2"><select id="orderFormShoeSize" name="size">
									<option></option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								</select></div>
								<div class="formField2"><select id="orderFormShoeQty" name="qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="others">others</option>
								</select></div>
							</div>
							<div class="clearer"></div><br />
							<div class="formLabel"><label for="name" class="">Name: <span style="color:red;">*</span></label></div>
							<div class="formField"><input type="text" id="orderFormName" name="name" size="30" class=""></div>
							<div class="formLabel"><label for="email" class="">Email Address: <span style="color:red;">*</span></label></div>
							<div class="formField"><input type="text" id="orderFormEmail" name="email" size="30" class=""></div>
							<div class="formLabel"><label for="shippingAddress" class="">Shipping Address: <span style="color:red;">*</span></label></div>
							<div class="formField"><input type="text" id="orderFormAdd" name="shippingAddress" size="30" class=""></div>
							<div class="formField"><input type="text" id="orderFormAdd2" name="shippingAddress2" size="30" class=""></div>
							<div class="formLabel"><label for="mobileNumber" class="">Mobile Number: <span style="color:red;">*</span></label></div>
							<div class="formField"><input type="text" id="orderFormMob" name="mobileNumber" size="30" class=""></div>
							<div class="formLabel"><label for="landlineNumber" class="">Landline Number: <span style="color:red;">*</span></label></div>
							<div class="formField"><input type="text" id="orderFormPhone" name="landlineNumber" size="30" class=""></div><br />
							<div id="imgSubmitLinkButton" align="center">
								<!--	
									<input type="submit" value="Submit" name="submit" style="position:relative;top:5px;" />
								-->
								<div id="linkSubmit" class="mainlinkarea" onmouseover="color(this)" onmouseout="decolor(this)">
									<span id="submitText">SUBMIT</span>
									<input id="submitPNGformainlinkarea" type="image" src="images/xparent.png" alt="Submit" name="submit" value="Submit" />
								</div>
							</div>
						</form>
						<!--====================================================================eof form-->
					</div>
				</div>
				<div class="clearer"></div>
			</div>

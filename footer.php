	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 stores-grid">
				<div class="stores">
					<h3>Our Offices</h3>
					<ul>
						<li>Feel free to visit our offices or contact us.</li>
						<li>Gateway Community </li>
						<li>Otta, Ogun State </li>
						<li>(234) 8133936723</li>

						<span>
						<li class="drive">Abeokuta Expressway </li>
						<li>Sango, Otta </li> 
						<li>(234) 7060465890 </li>
						</span>
					</ul>
				</div>
				<div class="social-icons white-icons">
					<ul>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="chrome"></a></li>
						<li><a href="#" class="vimeo"></a></li>
						<li><a href="#" class="rss"></a></li>
				</div>
			</div>
			<!-- <div class="col-md-3 blog">
				<h3>Blog posts</h3>
				<a href="#"></a>
				<p>
				</p>
				<a href="#"></a>
				<p>
				</p>
				<a href="#"></a>
				<p>
				</p>
			</div> -->
			<div class="col-md-4 support">
				<h3>Support</h3>
				<div class="support-grids">
					<div class="support-left">
						<ul>
							<li><a href="terms.php">Terms & Conditions</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="how_to_shop.php">How to Shop</a></li>
							<li><a href="how_to_sell.php">How to Sell</a></li>
							<?php if (!isset($_SESSION['company_name']) || $_SESSION['company_name'] == ""){ ?>
								<li><a href="signinseller.php">Seller Account</a></li>				
							<?php }else ?>
								<li><a href="farmerprofile.php"><?php if(isset($_SESSION['company_name'])){echo $_SESSION['company_name'];}  ?></a></li>
							<!-- <li><a href="">Privacy Policy</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Find A Farm </a></li>
							 --> 

						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 contact">
				<h3>Contact us</h3>
				<form>
					<input type="text" value="your e-mail..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your e-mail...';}" required="">
					<textarea value="your text...:" onfocus="if(this.value == 'your text...') this.value='';" onblur="if(this.value == '') this.value='your text...';">your text...</textarea>
					<input type="submit" value="Send MESSAGE">
				</form>
			</div>
			<div class="clearfix"> </div>
			<div class="copyright">
				
		</div>
		<!-- // container -->
	</div>
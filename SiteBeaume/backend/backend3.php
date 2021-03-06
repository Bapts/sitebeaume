<?php 

include 'pass.php'; 

if (@$_POST['txtUsername'] != $username && @$_POST['txtPassword'] != $password) { 

?> 

<h1>Login</h1> 

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <p><label for="txtUsername">Username:</label> 
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p> 

    <p><label for="txtpassword">Password:</label> 
    <br /><input type="password" title="Enter your password" name="txtPassword" /></p> 

    <p><input type="submit" name="Submit" value="Login" /></p> 

</form> 

<?php 

} 
else { 

?> 

<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
	<head>
		<title>Nation Hotel - Responsive Hotel HTML Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- GOOGLE WEB FONT -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800' rel='stylesheet' type='text/css'>
		
		<!-- NATION THEME STYLE -->
		<link href="../css/style.css" rel="stylesheet" media="screen">
		
		<!-- REVOLUTION SLIDER STYLE -->
		<link rel="stylesheet" type="text/css" href="../css/settings.css" media="screen" />
			
		<!-- GOOGLE MAPS API -->
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCbEJ826CbvSGwFTtO-KTWoowpdn3GxF50&sensor=false"></script>
		
		<!-- BOOKING CALENDAR STYLE -->
		<link href="../css/booking-calendar-pro.css" rel="stylesheet" media="screen">

		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="to-top">
		<div id="wrapper">
		<!-- BEGIN HEADER -->
		<header id="main-page-header-wrap">
		
			<!-- BEGIN TOP INFO BAR -->
			<div id="headcontainer">
				<div id="top-sticky-bar" class="container">
					<div id="sticky-top-bar">
						<div id="top-contact-wrap">
							<!-- BEGIN TOP CONTACT INFO -->
							<div id="top-street-address"><span class="icon-map-marker"></span>225 South West 37th Street, New York</div>
							<div id="top-phone"><span class="icon-mobile-phone"></span>+1 015 344 343 31</div>
							<div id="top-email"><span class="icon-envelope-alt"></span> nationhotel@example.com</div>
							<!-- END TOP CONTACT INFO -->
							<div id="top-search"><span class="icon-search"></span>
								<div id="top-search-window-wrap"><input type="text" value="search.." /></div>
							</div>
							<!-- BEGIN TOP LANGUAGES SELECT -->
							<div id="top-language-select">
								<ul class="dropdown">
									<li><a href="#"><img src="../images/gb.png" class="country-flag"> English <span class="icon-angle-down"></span></a>
										<ul class="sub_menu">
											<li><a href="#"><img src="../images/gf.png" class="country-flag"> French</a></li>
											<li><a href="#"><img src="../images/es.png" class="country-flag"> Spanish</a></li>
											<li><a href="#"><img src="../images/de.png" class="country-flag"> German</a></li>
											<li><a href="#"><img src="../images/it.png" class="country-flag"> Italian</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- END TOP LANGUAGES SELECT -->
						</div>
					</div>
				</div>
			</div>
			<!-- END TOP INFO BAR -->
			
			<!-- BEGIN LOGO AND NAVIGATION WRAP -->
			<div id="logocontainer" class="container">
				<div id="top-logo-menu-wrap" class="sixteen columns clearfix">
					<div class="three columns" id="top-logo-wrap">
					
						<!-- MAIN LOGO -->
						<a href="../index.html"><img src="../images/main-logo.png" alt="Nation Hotel logo" id="main-logo" /><img src="images/main-logo-small.png" alt="Nation Hotel logo" id="main-logo-min" /></a>
					
					</div>
					
					<div class="thirteen columns" id="top-navigation-menu-wrap">
					
						<!-- BEGIN MAIN MOBILE NAVIGATION -->
						<ul id="mobile-navigation-menu">	
							<li><span class="icon-reorder"></span>
								<ul id="mobile-navigation-menu-list">
									<li><a href="../index.html">Home</a></li>
									<li><a href="../rooms-list.html">Reservation</a></li>
									<li><a href="../rooms-list.html">-Rooms 3 Columns</a></li>
									<li><a href="../rooms-list2.html">-Rooms 2 Columns</a></li>
									<li><a href="../rooms-list3.html">-Rooms 1 Column</a></li>
									<li><a href="../reservation.html">-Rooms Single</a></li>
									<li><a href="../reservation-admin.html">-Rooms Admin</a></li>
									<li><a href="../reservation-form.html">-Reservation Form</a></li>
									<li><a href="../page.html">Pages</a></li>
									<li><a href="../gallery.html">-Gallery</a></li>
									<li><a href="../gallery.html">--Gallery With Header</a></li>
									<li><a href="../gallery-without-header.html">--Gallery Without Header</a></li>
									<li><a href="../gallery-with-sidebar.html">--Gallery With Sidebar</a></li>
									<li><a href="../columns.html">-Columns</a></li>
									<li><a href="../button-list.html">-Button&amp;Lists</a></li>
									<li><a href="../typography.html">-Typography</a></li>
									<li><a href="../widgets.html">-Widgets</a></li>
									<li><a href="../404.html">-404</a></li>
									<li><a href="../message-icon.html">-Message&amp;Icons</a></li>
									<li><a href="../page.html">-Pages</a></li>
									<li><a href="../page.html">--Page Right Sidebar</a></li>
									<li><a href="../page-left-sidebar.html">--Page Left Sidebar</a></li>
									<li><a href="../page-fullwidth.html">--Page Fullwidth</a></li>
									<li><a href="../page-without-header.html">--Page Without Header</a></li>
									<li><a href="../blog.html">Blog</a></li>
									<li><a href="../blog.html">-With Right Sidebar</a></li>
									<li><a href="../blog-left.html">-With Left Sidebar</a></li>
									<li><a href="../blog-fullwidth.html">-Fullwidth</a></li>
									<li><a href="../blog-single.html">-Single post page</a></li>
									<li><a href="../contact.html">Contact</a></li>
								</ul>
							</li>
						</ul>
						<!-- END MAIN MOBILE NAVIGATION -->
						
						<!-- BEGIN MAIN NAVIGATION -->
						<ul id="top-navigation-menu" class="dropdown">
							<li><a href="../index.html"><div class="top-navigation-content-wrap">Home <span class="under-title">site homepage</span></div></a></li>
							<li><a href="../rooms-list.html"><div class="top-navigation-content-wrap">Reservation <span class="icon-angle-down"></span><span class="under-title">book your room online</span></div></a>
								<ul class="sub_menu">
									<li class="submenu-arrow-wrap"><div class="top-submenu-arrow"></div></li>
									<li><a href="../rooms-list.html">Rooms 3 Columns</a></li>
									<li><a href="../rooms-list2.html">Rooms 2 Columns</a></li>
									<li><a href="../rooms-list3.html">Rooms 1 Column</a></li>
									<li><a href="../reservation.html">Rooms Single</a></li>
									<li><a href="../reservation-admin.html">Rooms Admin</a></li>
									<li><a href="../reservation-form.html">Reservation Form</a></li>
								</ul>
							</li>
							<li><a href="../page.html"><div class="top-navigation-content-wrap">Pages <span class="icon-angle-down"></span><span class="under-title">template features</span></div></a>
								<ul class="sub_menu">
									<li class="submenu-arrow-wrap"><div class="top-submenu-arrow"></div></li>
									<li><a href="../gallery.html">Gallery </a>
										<ul class="sub_menu2">
											<li><a href="../gallery.html">Gallery With Header</a></li>
											<li><a href="../gallery-without-header.html">Gallery Without Header</a></li>
											<li><a href="../gallery-with-sidebar.html">Gallery With Sidebar</a></li>
										</ul>
									</li>
									<li><a href="../columns.html">Columns</a></li>
									<li><a href="../button-list.html">Button&amp;Lists</a></li>
									<li><a href="../typography.html">Typography</a></li>
									<li><a href="../widgets.html">Widgets</a></li>
									<li><a href="../404.html">404</a></li>
									<li><a href="../message-icon.html">Message&amp;Icons</a></li>
									<li><a href="../page.html">Pages</a>
										<ul class="sub_menu2">
											<li><a href="../page.html">Page Right Sidebar</a></li>
											<li><a href="../page-left-sidebar.html">Page Left Sidebar</a></li>
											<li><a href="../page-fullwidth.html">Page Fullwidth</a></li>
											<li><a href="../page-without-header.html">Page Without Header</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="../blog.html"><div class="top-navigation-content-wrap">Blog <span class="icon-angle-down"></span><span class="under-title">news&amp;events</span></div></a>
								<ul class="sub_menu">
									<li class="submenu-arrow-wrap"><div class="top-submenu-arrow"></div></li>
									<li><a href="../blog.html">With Right Sidebar</a></li>
									<li><a href="../blog-left.html">With Left Sidebar</a></li>
									<li><a href="../blog-fullwidth.html">Fullwidth</a></li>
									<li><a href="../blog-single.html">Single post page</a></li>
								</ul>
							</li>
							<li><a href="../contact.html"><div class="top-navigation-content-wrap">Contact<span class="under-title">get in touch with us</span></div></a></li>
						</ul>
						<!-- END MAIN NAVIGATION -->
					
					</div>
				</div>
			</div>
			<!-- END LOGO AND NAVIGATION WRAP -->
		
		</header>
		<!-- END HEADER -->
		
		<div id="top-content-divider">
			<div id="main-title-wrap">Room admin contact info page</div>
			<div id="main-title-divider"></div>
			<div id="main-title-undertext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
		</div>
		
		
		<div class="container">
			<div class="eleven columns page-wrap">
				<p>To edit reservation information double click on desired date, fill all form's field in pop-up windows and click on "Save" button. To see updated information you may visit <a href="rooms-list.html">Rooms List</a> page, hover mouse on desired rooms image and click on "Check Availability" button (button with callendar icon). </p>
			
				<h3>Backend for 2 Rooms Appartment:</h3>
				<br />
				<div id="backend3"></div>
			
			
			</div>
			
			<!-- BEGIN PAGE SIDEBAR -->
			<div class="four columns offset-by-one page-sidebar">
							
				<!-- BEGIN SIDEBAR CATEGORIES -->
				<div class="sidebar-header">Backend Navigation</div>
				<ul id="blog-categories">
					<li><span class="icon-angle-right"></span><a href="backend1.php">Room with One Bedroom</a></li>
					<li><span class="icon-angle-right"></span><a href="backend2.php">Family Spacious Room</a></li>
					<li class="current-backend"><span class="icon-angle-right"></span><a href="backend3.php">2 Rooms Appartment</a></li>
					<li><span class="icon-angle-right"></span><a href="backend4.php">Double Room</a></li>
					<li><span class="icon-angle-right"></span><a href="backend5.php">3 Room Appartment</a></li>
					<li><span class="icon-angle-right"></span><a href="backend6.php">Large Business Suite</a></li>
					<li><span class="icon-angle-right"></span><a href="backend7.php">Room with City View</a></li>
					<li><span class="icon-angle-right"></span><a href="backend8.php">King Room Suite</a></li>
					<li><span class="icon-angle-right"></span><a href="backend9.php">Business Suite</a></li>
				</ul>
				<!-- END SIDEBAR CATEGORIES -->
				
			</div>
			<!-- END PAGE SIDEBAR -->
			
		</div>
		
	
	<!-- BEGIN FOOTER -->
	<footer>
		<div id="footer-wrap">
			<div class="container">
				<div id="prefooter-wrap">
					
					<!-- BEGIN FOOTER TWITTER FEED -->
					<div class="five columns">
						<div class="footer-header">Twitter Feed</div>
						<div class="footer-twitter-feed"></div>						
					</div>
					<!-- END FOOTER TWITTER FEED -->
					
					<!-- BEGIN FOOTER CONTACT INFO -->
					<div class="five columns">
						<div class="footer-header">Contact Information</div>
						<div id="footer-subscribe-text">Subscribe to our email newsletter for interesting information and news, sent out every month.</div>
						<input type="text" value="email address" id="footer-subscribe-email-field"><button id="footer-subscribe-button">Submit</button>
					
						<div id="footer-contact-info-wrap">
							<div id="footer-email-wrap">
								<span id="email-title"><span class="icon-envelope-alt"></span>Email:</span> <span id="email-value">nationhotel@example.com</span>
								<div style="clear:both;"></div>
							</div>
							<div id="footer-phone-wrap">
								<span id="phone-title"><span class="icon-phone"></span>Phone:</span> <span id="phone-value">+1 015 344 343 31</span>
								<div style="clear:both;"></div>
							</div>
							<div id="footer-skype-wrap">
								<span id="skype-title"><span class="icon-skype"></span>Skype:</span> <span id="skype-value">hotelnationskype</span>
								<div style="clear:both;"></div>
							</div>
							<div id="footer-address-wrap">
								<span id="address-title"><span class="icon-compass"></span>Address:</span> <span id="address-value">225 South West 37th St. NY</span>
								<div style="clear:both;"></div>
							</div>
						</div>
					</div>
					<!-- END FOOTER CONTACT INFO -->
					
					<!-- BEGIN FOOTER CONNECT WITH US -->
					<div class="five columns offset-by-one">
						<div class="footer-header">Connect with us</div>
						<ul id="flickr-feed"></ul>
						<div style="clear:both"></div>
						<div class="social-wrap-divider"></div>
						<div id="footer-social-wrap">
							<span class="icon-facebook"></span>
							<span class="icon-twitter"></span>
							<span class="icon-google-plus"></span>
							<span class="icon-linkedin"></span>
							<span class="icon-skype"></span>
							<span class="icon-instagram"></span>
						</div>
					</div>
					<!-- END FOOTER CONNECT WITH US -->
					
					<div style="clear:both"></div>
					
					<!-- BEFIN COPYRIGHT INFO -->
					<div id="copyright-wrap">
						<div id="copyright-text">Copyright &copy; 2013 Nation theme. All right reserved.</div>
						<div id="copyright-links"><a href="">Term of Use</a> &nbsp; / &nbsp; <a href="">Privacy Policy</a> &nbsp; / &nbsp; <a href="">Contact Us</a></div>
					</div>
					<!-- END COPYRIGHT INFO -->
				
				</div>
			</div>
		</div>
	</footer>
	<!-- END FOOTER -->
	
	</div>
	<a href="#to-top" id="back-to-top"><span class="icon-chevron-up"></span></a>
	
	<!-- jQuery LIBRARY -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	
	<!-- jQuery SMOTH SCROLL  -->
	<script type="text/javascript" src="../js/smoothScroll.js"></script>
		
	<!-- jQuery BOOKING CALENDAR PRO -->
	<script type="text/javascript" src="../js/jquery.bookingCalendarPRO.js"></script>
	
	<!-- jQuery REVOLUTION SLIDER  -->
	<script type="text/javascript" src="../js/jquery.themepunch.revolution.min.js"></script>
	
	<!-- NATION THEME MAIN SCRIPTS -->
	<script src="../js/allscript.js"></script>
  
  </body>
</html>


<?php 

} 

?> 






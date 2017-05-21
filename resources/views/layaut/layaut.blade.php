<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fuel Serve Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs  for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/plantilla/css/bootstrap.css" rel='stylesheet' type='text/css' />  
<link href="/plantilla/css/style.css" rel='stylesheet' type='text/css' />
<link href="/plantilla/css/font-awesome.css" rel="stylesheet"> 			<!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<!-- js -->
<script src="/plantilla/js/jquery-1.11.1.min.js"> </script>	
<script src="/plantilla/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	 
<script src="/plantilla/js/menu_jquery.js"></script> <!-- pop-up -->	
<!-- //js -->
</head>
<body>
	
	@include('layaut.cabe');

	<!-- //header -->
	@include('layaut.banner');
	<!-- //banner -->
	<!-- ----------------------------------------------------------------------- -->


@yield('contenido')



	<!-- //news-bottom -->
	<!-- footer -->
	<div class="footer"> 
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-6 footer-right">
					<h5>Stay in Touch</h5>
					<form action="#" method="post">
						<input type="text" name="Email" placeholder="Email Id" required="">
						<input type="submit" value="Subscribe">
					</form>
					<div class="footer-right-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3771907.975236311!2d-2.09480472072984!3d39.07355564363949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436857347604"></iframe>
					</div>
				</div>
				<div class="col-md-6 footer-left"> 
					<div class="w3-agileitsicons">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="twt" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
							<li><a class="drbl" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
							<li><a class="be" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i> </a></li>
						</ul> 
					</div>
					<div class="f-address">
						<p class="text">Eiusmod Tempor inc ,St Dolore Place,Kingsport 56777</p>
						<p class="number">+1 234 567 8901</p>
					</div>
					<div class="copyright">
						<p>© 2017 Fuel Serve .  All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<!-- //footer -->
	<!-- smooth-scrolling-of-move-up --> 
	<script type="text/javascript" src="/plantilla/js/move-top.js"></script>
	<script type="text/javascript" src="/plantilla/js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> 
	<!-- //smooth-scrolling-of-move-up -->
</body>
</html>
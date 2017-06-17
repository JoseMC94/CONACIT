<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="/plantilla/images/c.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fuel Serve Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs  for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<title>.: Congreso Nacional de Sistemas y tecnologías :. </title>


<!-- Custom Theme files -->
<link href="/plantilla/css/bootstrap.css" rel='stylesheet' type='text/css' /> 
<link href="/plantilla/css/m/animate.css" rel='stylesheet' type='text/css' />
<link href="/plantilla/css/m/green.css" rel='stylesheet' type='text/css' />
<link href="/plantilla/css/m/responsive.css" rel='stylesheet' type='text/css' />
<link href="/plantilla/css/style.css" rel='stylesheet' type='text/css' />



<link href="/plantilla/css/m/owl.carousel.css" rel='stylesheet' type='text/css' />
<link href="/plantilla/css/m/owl.theme.css" rel='stylesheet' type='text/css' />
<link href="/plantilla/css/m/owl.transitions.css" rel='stylesheet' type='text/css' />




<link href="/plantilla/css/font-awesome.css" rel="stylesheet"> 			<!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<!-- js -->
<script src="/plantilla/js/jquery-2.1.1.min.js"></script>
<script src="/plantilla/js/count-to.js"></script>

<script src="/plantilla/js/bootstrap.js"></script>
<script src="/plantilla/js/jquery.easing.1.3.js"></script>
<script src="/plantilla/js/jquery.fitvids.js"></script>
<script src="/plantilla/js/jquery.appear.js"></script>
<script src="/plantilla/js/owl.carousel.min.js"></script>
<script src="/plantilla/js/script.js"></script>



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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15540.85603823333!2d-74.22278602576397!3d-13.14889658273345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb55e9aaeb3c30130!2zTcOzZHVsb3M!5e0!3m2!1ses!2s!4v1497699944316" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
			
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> 
	<!-- //smooth-scrolling-of-move-up -->
</body>
</html>
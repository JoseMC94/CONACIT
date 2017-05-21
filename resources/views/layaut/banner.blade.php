<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="banner-agileinfo">
				<script src="/plantilla/js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						 });				
					});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-w3text">
								<h3>Lorem ipsum dolor consectetur</h3>
								<h5>molestie elit condi</h5>
								<p>Sed dignissim augue ut ex cursus, vel molestie elit condimentum mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis. Curabitur ut pulvinar dui mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis curabitur ut pulvinar dui. Nunc tortor dui, mattis sit amet ultricies sed, feugiat quis odio Ut metus justo.</p>
								<div class="banner-buttons"> 
									<div class="banner-button">
										<a href="single.html">More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-w3text">
								<h3>Vel molestie elit condimentum</h3>
								<h5>molestie elit condi</h5>
								<p>Morbi quis tinci urna, eget laoreet felis. Sed dignissim augue ut ex cursus, vel molestie elit condimentum mattis nec ipsum. Curabitur ut pulvinar dui mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis curabitur ut pulvinar dui. Nunc tortor dui, mattis sit amet ultricies sed, feugiat quis odio Ut metus justo.</p>
								<div class="banner-buttons"> 
									<div class="banner-button">
										<a href="single.html">More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-w3text">
								<h3>Curabitur ut pulvinar duicursus</h3>
								<h5>molestie elit condi</h5>
								<p>Vel molestie elit sed dignissim augue ut ex cursus, condimentum mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis. Curabitur ut pulvinar dui mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis curabitur ut pulvinar dui. Nunc tortor dui, mattis sit amet ultricies sed, feugiat quis odio Ut metus justo.</p>
								<div class="banner-buttons">
									<div class="banner-button">
										<a href="single.html">More</a>
									</div> 
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<!-- //container -->
	</div>
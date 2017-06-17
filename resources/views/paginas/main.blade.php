
@extends('layaut.layaut')
@section('title', 'Inicio')


@section('contenido')

	<!-- welcome -->
	<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="welcome-info">
				<h2 class="agileits-title">Bienvenido</h2>
				<h5>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h5>
				<p>Morbi condimentum imperdiet placerat. Nullam in nisl eget turpis convallis venenatis. Cras cursus elementum justo nec bibendum. Donec quis nisi cursus, vestibulum elit eget, sagittis ligula.</p>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //welcome -->
	<!-- slider -->
	<div class="slider">
		<div class="arrival-grids wthree-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.html"><img src="images/s1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s2.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s3.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s4.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s2.jpg" alt=""/>
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		</div>
	</div>
	<!-- //slider -->
	<!-- news -->
	<div class="news" id="news">
		<!-- container -->
		<div class="container">
			<div class="news-info agileits-w3layouts">
				<h3 style="color: #BE8C29;">Noticias &amp; Eventos</h3>
			</div>
			<div class="news-grids">
				<div class="col-md-6 news-wthreegrid">
					<div class="news-grid-left">
						<div class="col-md-3 date">
							<p>23</p>
							<span>June</span>
						</div>
						<div class="col-md-9 date-info">
							<a href="single.html">Fusce scelerisque sit amet justo vitae</a>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
							<div class="news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="news-grid-left">
						<div class="col-md-3 date">
							<p>09</p>
							<span>May</span>
						</div>
						<div class="col-md-9 date-info">
							<a href="single.html">Fusce scelerisque sit amet justo vitae</a>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
							<div class="news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 news-wthreegrid">
					<div class="news-agileimg">
						<img src="images/6.jpg" alt="" />
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //news -->



















	<!-- Start Pricing Table Section -->
	    <div id="pricing" class="pricing-section">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="col-md-12">
	                        <div class="section-title text-center">
	                            <h3>Precios para ESTUDIANTES</h3>
	                            <p class="white-text">Aprovecha e inscríbete cuanto antes</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	                    
	            <div class="row">
	                        
	                <div class="pricing">
	                        
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Marzo</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.100<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a style="color: #000000" class="btn-system btn-small">INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                        
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Abril</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.110<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a style="color: #000000" class="btn-system btn-small">INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Mayo - Junio</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.130<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a href="app/index.php?OPFORRLORV=17" class="btn-system btn-small" disabled>INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                        
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Julio - Agosto</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.150<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a style="color: #000000" class="btn-system btn-small">INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>			
	            </div>
	            
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="col-md-12">
	                        <div class="section-title text-center">
	                        <br><br><br>
	                            <h3>Precios para PROFESIONALES</h3>
	                            <p class="white-text">Aprovecha e inscríbete cuanto antes</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	                    
	            <div class="row">
	                        
	                <div class="pricing">
	                        
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Marzo</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.120<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a style="color: #000000" class="btn-system btn-small">INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                        
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Abril</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.130<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a style="color: #000000" class="btn-system btn-small">INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Mayo - Junio</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.150<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a href="app/index.php?OPFORRLORV=17" class="btn-system btn-small" disabled>INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                        
	                        <div class="col-md-12">
	                            <div class="pricing-table">
	                                <div class="plan-name">
									    <h3>Julio - Agosto</h3>
	                                </div>
	                                <div class="plan-price">
	                                    <div class="price-value">S/.170<span>.00</span></div>
	                                    <div class="interval"></div>
	                                </div>
	                                <div class="plan-list">
	                                    <ul>
	                                        <li>Pase Total al Evento</li>
	                                        <li>Material de Apoyo</li>
	                                        <li>Certificación</li>                                        
	                                    </ul>
	                                </div>
	                                <div class="plan-signup">
	                                    <a style="color: #000000" class="btn-system btn-small">INSCRIBIRSE</a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>			
	            </div>
	        </div>
	    </div>
	    <!-- End Pricing Table Section -->    



























	<!-- news-bottom -->
	<div class="news-bottom">
		<!-- container -->

		<div class="container">
			<div class="news-w3agileitsinfo">
				<h3>Fusce ullamcorper </h3>
				<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet In eget sem consectetur, condimentum velit nec, rhoncus sapien. Cras sit amet ullamcorper dui. Ut euismod lacinia elit sed ullamcorper. Integer mollis neque sed dictum pretium. Integer eget elementum sapien. dolor id egestas. Nulla leo purus, facilisis non cursus ut Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
				<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet In eget sem consectetur, condimentum velit nec, rhoncus sapien. Cras sit amet ullamcorper dui. Ut euismod lacinia elit sed ullamcorper. Integer mollis neque sed dictum pretium. Integer eget elementum sapien. dolor id egestas. Nulla leo purus.</p>
			</div>
		</div>
		<!-- //container -->
	</div>











 <!-- Start Latest News Section -->
    <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Concursos</h3>
                        <p>Arma tu equipo y concursa contra equipos de otras universidades</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/programacion.jpg" class="img-responsive" alt="">
                            <h4><a href="https://drive.google.com/file/d/0B4UsRMao7sI3cnlWdk5UUzgtM28/view">Concurso de Programación</a></h4>
                            <div class="post-details">
                                <span class="date1"><strong>S/.30.00</strong> <br>Por Equipo</span>
                                
                            </div>
                            <p>Prueba tus habilidades como programador. Arma tu equipo y prepárate para ganar!. En el concurso te enfrentarás a diversos equipos pertenecientes a otras universidades del país. Revisa las Bases del concurso.</p>
                            <a href="https://drive.google.com/file/d/0B4UsRMao7sI3cnlWdk5UUzgtM28/view" class="btn btn-primary">Bases Programación</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/startup.jpg" class="img-responsive" alt="">
                            <h4><a href="https://drive.google.com/file/d/0B4UsRMao7sI3WkJXbHRmUFdpX2s/view">Concurso de Start-Up</a></h4>
                            <div class="post-details">
                                <span class="date1"><strong>S/.40.00</strong> <br>Por Equipo</span>
                                
                            </div>
                            <p>Participa con tu equipo de emprendedores. Presenta tu StartUp y demuestra el éxito que la espera. La evaluación estará a cargo de profesionales internacionales de mucha experiencia. Revisa las bases del concurso.</p>
                            <a href="https://drive.google.com/file/d/0B4UsRMao7sI3WkJXbHRmUFdpX2s/view" class="btn btn-primary">Bases Start-Up</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/arduino.jpg" class="img-responsive" alt="">
                            <h4><a href="https://drive.google.com/file/d/0B4UsRMao7sI3dmVMdTdGRXVzODQ/view">Concurso de Arduino</a></h4>
                            <div class="post-details">
                                <span class="date1"><strong>S/.30.00</strong> <br>Por Equipo</span>
                                
                            </div>
                            <p>Preséntate sólo o con tu equipo. Afina las capacidades de tu robot, concursa y demuestra que es el mejor. Hay muchas categorías en las que puedes participar. Revisa las bases del concurso</p>
                            <a href="https://drive.google.com/file/d/0B4UsRMao7sI3dmVMdTdGRXVzODQ/view" class="btn btn-primary">Bases Arduino</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/hacking.jpg" class="img-responsive" alt="">
                            <h4><a href="https://drive.google.com/file/d/0B4UsRMao7sI3WnJxX2w2bVJDS2s/view">Hacking</a></h4>
                            <div class="post-details">
                                <span class="date1"><strong>S/.30.00</strong> <br>Por Equipo</span>
                                
                            </div>
                            <p>Pon a prueba tus habilidades como hacker, puedes presentarte sólo o en equipo. Supera los retos presentados en el concurso y demuestra que ningún sistema es seguro. Revisa las bases del concurso.</p>
                            <a href="https://drive.google.com/file/d/0B4UsRMao7sI3WnJxX2w2bVJDS2s/view" class="btn btn-primary">Bases Hacking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->







	@endsection
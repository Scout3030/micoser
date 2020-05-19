@if(Request::url() == route('home'))

<!-- template sections -->
<div class="transparent_wrapper">
	<header class="page_header header_darkgrey ds page_header_side vertical_menu_header">
		<div class="container-fluid">
			<div class="row flex-wrap v-center">
				<div class="col-xs-12"> <a href="index.html" class="logo">
					<img src="{{asset('images/logo_micoser_white.png')}}" alt="" style="width: 70%">
					</a> <span class="toggle_menu_side header-slide"><span></span></span>
					<div class="scrollbar-macosx">
						<div class="side_header_inner">
							<div class="container-fluid">
								<div class="row flex-wrap v-center">
									<div class="col-xs-12 col-sm-6"> <a href="{{route('home')}}" class="logo">
										<img src="{{asset('images/logo_micoser_white.png')}}" alt="">
									</a> </div>
								</div>
							</div>
							<div class="header-side-menu darklinks">
								<!-- main side nav start -->
								<nav class="mainmenu_side_wrapper">
									<ul class="nav menu-side-click">
										<li class="active"><a href="{{route('home')}}">Inicio</a></li>
										<li>
											<a href="#">Quienes somos</a>
											<ul>
												<li>
													<a href="{{route('about')}}">Nosotros</a>
												</li>
												<li>
													<a href="{{route('ssma')}}">SSMA</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="{{route('services')}}">Servicios</a>
											<ul>
												@foreach(App\Service::orderBy('name', 'desc')->get() as $service)
												<li>
													<a href="{{route('service.show', $service->slug)}}">{{$service->name}}</a>
												</li>
												@endforeach
											</ul>
										</li>
										<li>
											<a href="{{route('sectors')}}">Sectores</a>
											<ul>
												@foreach(App\Sector::orderBy('name', 'desc')->get() as $sector)
												<li>
													<a href="{{route('sector.show', $sector->slug)}}">{{$sector->name}}</a>
												</li>
												@endforeach
											</ul>
										</li>
										<!--<li><a href="#">Trabaja con nosotros</a> </li>-->
										<li><a href="{{route('contact')}}">Contáctanos</a>
									</ul>
								</nav>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
<!-- </div> -->


<!-- BANNER -->
<section class="intro_section page_mainslider ds all-scr-cover image-dependant half-mask">
	<div class="flexslider" data-dots="false" data-nav="true">
		<ul class="slides">
			<li>
				<div class="slide-image-wrap"> <img src="images/slide01.jpg" alt=""> </div>
				<div class="slide-image-wrap svg to_animate" data-animation="fadeInRight"> <svg xmlns="http://www.w3.org/2000/svg" width="960" height="1000">
					<defs>
					<mask id="slideClipPath1">
					<rect width="100%" height="100%" fill="white"></rect>
					<text x="-1.2%" y="50%" class="mask-text first">MI</text>
					<text x="-1.2%" y="50%" class="mask-text second">CO</text>
					<text x="-1.2%" y="50%" class="mask-text third">SER</text>
					</mask>
					</defs>
					<rect class="mask" width="100%" height="100%" mask="url(#slideClipPath1)"></rect>
				</svg> </div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-right">
							<div class="slide_description_wrapper">
								<div class="slide_description">
									<div class="intro-layer" data-animation="fadeInLeft">
										<h2>Minería</h2>
									</div>
								</div>
								<!-- eof .slide_description -->
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			</li>
			<li>
				<div class="slide-image-wrap"> <img src="images/slide02.jpg" alt=""> </div>
				<div class="slide-image-wrap svg to_animate" data-animation="fadeInRight"> <svg xmlns="http://www.w3.org/2000/svg" width="960" height="1000">
					<defs>
					<mask id="slideClipPath2">
					<rect width="100%" height="100%" fill="white"></rect>
					<text x="-1.2%" y="50%" class="mask-text first">MI</text>
					<text x="-1.2%" y="50%" class="mask-text second">CO</text>
					<text x="-1.2%" y="50%" class="mask-text third">SER</text>
					</mask>
					</defs>
					<rect class="mask" width="100%" height="100%" mask="url(#slideClipPath2)"></rect>
				</svg> </div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-right">
							<div class="slide_description_wrapper">
								<div class="slide_description">
									<div class="intro-layer" data-animation="fadeInLeft">
										<h2>Construcción</h2>
									</div>
								</div>
								<!-- eof .slide_description -->
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			</li>
			<li>
				<div class="slide-image-wrap"> <img src="images/slide03.jpg" alt=""> </div>
				<div class="slide-image-wrap svg to_animate" data-animation="fadeInRight"> <svg xmlns="http://www.w3.org/2000/svg" width="960" height="1000">
					<defs>
					<mask id="slideClipPath3">
					<rect width="100%" height="100%" fill="white"></rect>
					<text x="-1.2%" y="50%" class="mask-text first">MI</text>
					<text x="-1.2%" y="50%" class="mask-text second">CO</text>
					<text x="-1.2%" y="50%" class="mask-text third">SER</text>
					</mask>
					</defs>
					<rect class="mask" width="100%" height="100%" mask="url(#slideClipPath3)"></rect>
				</svg> </div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-right">
							<div class="slide_description_wrapper">
								<div class="slide_description">
									<div class="intro-layer" data-animation="fadeInLeft">
										<h2>Agroindustria</h2>
									</div>
								</div>
								<!-- eof .slide_description -->
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			</li>
			<li>
				<div class="slide-image-wrap"> <img src="images/slide04.jpg" alt=""> </div>
				<div class="slide-image-wrap svg to_animate" data-animation="fadeInRight"> <svg xmlns="http://www.w3.org/2000/svg" width="960" height="1000">
					<defs>
					<mask id="slideClipPath3">
					<rect width="100%" height="100%" fill="white"></rect>
					<text x="-1.2%" y="50%" class="mask-text first">MI</text>
					<text x="-1.2%" y="50%" class="mask-text second">CO</text>
					<text x="-1.2%" y="50%" class="mask-text third">SER</text>
					</mask>
					</defs>
					<rect class="mask" width="100%" height="100%" mask="url(#slideClipPath3)"></rect>
				</svg> </div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-right">
							<div class="slide_description_wrapper">
								<div class="slide_description">
									<div class="intro-layer" data-animation="fadeInLeft">
										<h2>Energía</h2>
									</div>
								</div>
								<!-- eof .slide_description -->
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			</li>
			<li>
				<div class="slide-image-wrap"> <img src="images/slide05.jpg" alt=""> </div>
				<div class="slide-image-wrap svg to_animate" data-animation="fadeInRight"> <svg xmlns="http://www.w3.org/2000/svg" width="960" height="1000">
					<defs>
					<mask id="slideClipPath3">
					<rect width="100%" height="100%" fill="white"></rect>
					<text x="-1.2%" y="50%" class="mask-text first">MI</text>
					<text x="-1.2%" y="50%" class="mask-text second">CO</text>
					<text x="-1.2%" y="50%" class="mask-text third">SER</text>
					</mask>
					</defs>
					<rect class="mask" width="100%" height="100%" mask="url(#slideClipPath3)"></rect>
				</svg> </div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-right">
							<div class="slide_description_wrapper">
								<div class="slide_description">
									<div class="intro-layer" data-animation="fadeInLeft">
										<h2>Petroquímica</h2>
									</div>
								</div>
								<!-- eof .slide_description -->
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			</li>
		</ul>
	</div>
	<!-- eof flexslider -->
</section>
<!-- END OF BANNER -->

@else

<!-- template sections -->
<header class="page_header header_darkgrey tall_header toggler_xs_right" style="background: #29437e">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 display-flex v-center">
				<div class="header_left_logo">
					<a href="{{route('home')}}" class="logo">
						<img src="{{asset('images/logo_micoser_white.png')}}" alt="">
					</a>
				</div>
				<div class="header_mainmenu text-center">
					<!-- main nav start -->
					<nav class="mainmenu_wrapper">
						<ul class="mainmenu nav sf-menu" >
							<li @if(Request::url() == route('home')) class="active" @endif>
								<a href="{{route('home')}}" style="color: #fff">Inicio</a>
							</li>
							<li @if(Request::url() == route('about') || Request::url() == route('ssma')) class="active" @endif>
								<a href="{{route('about')}}" style="color: #fff">Quienes somos</a>
								<ul>
									<li> <a href="{{route('about')}}" style="color: #fff">Nosotros</a> </li>
									<li> <a href="{{route('ssma')}}" style="color: #fff">SSMA</a> </li>
								</ul>
							</li>
							<li @if(Request::url() == route('services')) class="active" @endif>
								<a href="{{route('services')}}" style="color: #fff">Servicios</a>
								<ul>
									@foreach(App\Service::orderBy('name', 'desc')->get() as $service)
									<li>
										<a href="{{route('service.show', $service->slug)}}">{{$service->name}}</a>
									</li>
									@endforeach
								</ul>
							</li>
							<li @if(Request::url() == route('sectors')) class="active" @endif>
								<a href="{{route('sectors')}}" style="color: #fff">Sectores</a>
								<ul>
									@foreach(App\Sector::orderBy('name', 'desc')->get() as $sector)
									<li>
										<a href="{{route('sector.show', $sector->slug)}}">{{$sector->name}}</a>
									</li>
									@endforeach
								</ul>
							</li>
							<!--<li @if(Request::url() == route('home')) class="active" @endif>
								<a href="#" style="color: #fff">Trabaja con nosotros</a>
							</li>-->
							<li @if(Request::url() == route('contact')) class="active" @endif>
								<a href="{{route('contact')}}" style="color: #fff">Contacto</a>
							</li>

						</ul>
					</nav>
					<!-- eof main nav -->
					<!-- header toggler --><span class="toggle_menu"><span></span></span>
				</div>
				<div class="header_right_buttons text-right hidden-xs">
					<div class="darklinks">
						<a href="https://www.facebook.com/Micosersa2012/" class="social-icon border-icon rounded-icon socicon-facebook" target="_BLANK"></a>
						<a href="https://www.linkedin.com/company/micoser-s.a/" class="social-icon border-icon rounded-icon socicon-linkedin" target="_BLANK"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

@endif

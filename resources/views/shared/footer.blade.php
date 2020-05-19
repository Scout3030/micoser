<!-- FOOTER -->
<footer class="page_footer ds dark section_padding_top_150 section_padding_bottom_140 columns_margin_bottom_40 columns_padding_30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="widget widget_text">
					<h3 class="widget-title">Menú</h3>
					<ul class="list-unstyled darklinks">
						<li>
							<div class="media small-media">
								<div class="media-left">
									<a href="{{route('home')}}">Inicio</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left">
									<a href="{{route('about')}}">Quiénes somos</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left">
									<a href="{{route('services')}}">Servicios</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left">
									<a href="{{route('sectors')}}">Sectores</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left">
									<a href="{{route('home')}}">Trabaja con nosotros</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left">
									<a href="{{route('contact')}}">Contacto</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="widget widget_text">
					<h3 class="widget-title">Sectores de trabajo</h3>
					<ul class="list1 no-top-border no-bottom-border greylinks">
						@foreach(App\Sector::orderby('name', 'asc')->get() as $sector)
						<li><a href="{{route('sector.show', $sector->slug)}}">{{$sector->name}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="widget widget_text">
					<h3 class="widget-title">Contacto</h3>
					<ul class="list-unstyled darklinks">
						<li>
							<div class="media small-media">
								<div class="media-left"> <i class="fa fa-map-marker highlight cons-width"></i> </div>
								<div class="media-body"> Calle Diego Quispe 1066 <br> Urb. El Bosque Trujillo. </div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left"> <i class="fa fa-phone highlight cons-width"></i> </div>
								<div class="media-body"> +51 968-711050 <br> +51 976-397820 <br> +51 948-091012</div>
							</div>
						</li>
						<li>
							<div class="media small-media">
								<div class="media-left"> <i class="fa fa-pencil highlight cons-width"></i> </div>
								<div class="media-body"> <a href="mailto:administracion@micosersa.com">administracion@micosersa.com</a> </div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="widget widget_text">
					<h3 class="widget-title">Nuestros horarios</h3>
					<ul class="feature-list">
						<li> <span>Lun - vie</span> <span class="grey">8:00 - 20:00</span> </li>
						<li> <span>Sábados</span> <span class="grey">9:00 - 16:00</span> </li>
						<li> <span>Domingos</span> <span class="grey">Cerrado</span> </li>
						<li> <span>Feriados</span> <span class="grey">10:00 - 14:00</span> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- END OF FOOTER -->
<!-- COPYRIGTH -->
<section class="page_copyright cs section_padding_15">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="small-text">&copy; Copyright 2020 Todos los derechos reservados</p>
			</div>
		</div>
	</div>
</section>
<!-- END OF COPYRIGTH -->
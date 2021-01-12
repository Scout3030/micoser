@extends('layouts.app')

@section('content')

<section class="page_breadcrumbs cs background_cover breadcrumbs1 section_padding_50 columns_padding_5">
	<div class="container">
		<div class="row"> <span class="section_bg_header">Contacto</span>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
				<h1 class="sr-only">Contacto</h1>
			</div>
		</div>
	</div>
</section>

<section class="ds section_padding_top_150 section_padding_bottom_150 columns_padding_30 columns_margin_bottom_40">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h2 class="big-margin text-uppercase">Formulario de contacto</h2>
				<form class="contact-form input-text-center row columns_padding_5" method="post" action="{{route('admin.request')}}">
                    @csrf
					<div class="col-xs-12">
						<div class="form-group bottommargin_0">
							<label for="name">Nombre / Empresa</label>
							<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nombre / Empresa" autocomplete="off">
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group bottommargin_0">
							<label for="email">Correo</label>
							<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Correo electrónico" autocomplete="off">
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group bottommargin_0">
							<label for="phone">Teléfono</label>
							<input type="tel" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Teléfono" autocomplete="off">
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group bottommargin_0">
							<label for="message">Mensaje</label>
							<textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Mensaje"></textarea>
						</div>
					</div>
					<div class="col-xs-12 bottommargin_0">
						<div class="contact-form-submit"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 min_width_button margin_0">ENVIAR</button> </div>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-sm-6">
				<h2 class="text-uppercase">Entremos en contacto</h2>
				<p>Llena nuestro formulario y contáctate con nosotros.</p>
				<div class="row">
					<div class="col-xs-12 col-lg-7">
						<ul class="list-unstyled darklinks grey">
							<li>
								<div class="media small-media">
									<div class="media-left"> <i class="fa fa-map-marker highlight cons-width"></i> </div>
									<div class="media-body"> Dirección: Calle Diego Quispe 1066 Urb. El Bosque Trujillo </div>
								</div>
							</li>
							<li>
								<div class="media small-media">
									<div class="media-left"> <i class="fa fa-phone highlight cons-width"></i> </div>
									<div class="media-body"> +51 968-711050 <br> +51 976-397820 <br> +51 948-091012 </div>
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
					<div class="col-xs-12 col-lg-5">
						<ul class="list-unstyled feature-list bototmmargin_0">
							<li> <span class="highlight">Lun-vie</span> <span class="grey">8:00 - 20:00</span> </li>
							<li> <span class="highlight">Sábados</span> <span class="grey">9:00 - 16:00</span> </li>
							<li> <span class="highlight">Domingos</span> <span class="grey">Cerrado</span> </li>
							<li> <span class="highlight">Feriados</span> <span class="grey">10:00 - 14:00</span> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--.row -->
	</div>
	<!--.container -->
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9890019515997!2d-79.00574438584194!3d-8.102601083292322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad163a39d163b5%3A0x2c75079b9d3b7d!2sDiego%20Quispe%20Tito%201066%2C%20Trujillo%2013007!5e0!3m2!1ses!2spe!4v1589262675891!5m2!1ses!2spe" width="100%" height="500" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

@endsection
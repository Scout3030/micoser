@extends('layouts.app')

@section('content')

<section id="about" class="ls background_cover section_padding_top_150 section_padding_bottom_140 columns_margin_bottom_40">
	<div class="container">
		<div class="row flex-wrap v-center">
			<div class="col-xs-12 col-sm-6">
				<h2 class="section_header text-uppercase"> Somos <span class="big highlight">MICOSER</span> </h2>
				<blockquote>
					<p>MICOSER S.A. Es una empresa fundada con capitales peruanos en el año 2012 con el propósito de participar activa y decididamente en los principales proyectos Mineros, Petroquímica, Agroindustria y Construcción, cumpliendo con altos estándares de seguridad, medio ambiente y responsabilidad social.
						</p><p>
					Contamos con un equipo multidisciplinario de expertos profesionales, técnicos y operarios con vasta experiencia, equipos nuevos y de alta tecnología para cumplir con nuestros servicios de Ingeniería, Construcción, Operación y Mantenimiento Integral en las diferentes Industrias
					</p>
				</blockquote>
				<div class="toppadding_10 visible-lg"></div>
				<a href="{{route('contact')}}" class="theme_button color1 min_width_button">Contactar</a>
			</div>
			<div class="col-xs-12 col-sm-6 text-center text-sm-right" style="border:none">
				<div class="with_offset_frame" > <img src="images/quote-person.png" alt="" width="88%"> </div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 bottommargin_0">
				<h2>NUESTRA VISIÓN</h2>
				<ul class="list2 grey">
					<li>Ser una empresa líder a nivel nacional en los sectores Minero –metalúrgico, Construcción, Petroquímica, infraestructura, energía y saneamiento, Con servicios de calidad total.
					</li>
				</ul>

				<h2>NUESTRA MISION</h2>
				<ul class="list2 grey">
					<li>Brindar solución integral a las necesidades de nuestros clientes más allá de las obligaciones contractuales, trabajando en un entorno que motive al desarrollo personal, respeto al medio ambiente y comunidades de nuestro entorno.
					</li>
				</ul>

				<h2>NUESTROS VALORES</h2>
				<ul class="list2 grey">
					<li><strong>Innovación:</strong> Somos creativos, accesibles a nuevas ideas, proponiendo nuevos servicios, desarrollando herramientas técnicas y de gestión novedosas, que aporten ventajas competitivas, que generen valor a los procesos de nuestros clientes y resulten en un mayor beneficio para la empresa.
					</li>
					<li><strong>Compromiso:</strong> Promovemos actividades que generan compromiso con la empresa de tal forma que todos podamos sentirla como propia y ser conscientes de la importancia de cumplir lo acordado.</li>
					<li><strong>Excelencia:</strong> Buscamos la excelencia como meta organizacional, como forma de trabajar para alcanzar los resultados previstos y de ejecutar nuestras actividades de manera óptima.</li>
					<li><strong>Integridad:</strong> La empresa mantiene y exige que sus colaboradores procedan con una conducta ética, transparente e integral dentro y fuera de los lugares de trabajo.</li>
					<li><strong>Seguridad y Salud:</strong> Asumimos la Seguridad y la Salud en el Trabajo como una prioridad empresarial que se despliega en todas nuestras acciones y decisiones protegiendo proactivamente a integridad de las personas, a la propiedad y al medio ambiente.</li>
				</ul>
			</div>
		</div>
	</div>
</section>

@endsection
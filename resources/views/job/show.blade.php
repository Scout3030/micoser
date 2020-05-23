@extends('layouts.app')

@section('content')
<section class="page_breadcrumbs cs background_cover breadcrumbs1 section_padding_50 columns_padding_5">
	<div class="container">
		<div class="row"> <span class="section_bg_header">Trabaja con nosotros</span>
		</div>
	</div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<article class="vertical-item content-padding big-padding with_background">
					<div class="item-content">
						<h1 class="entry-title">{{$jobOffer->title}}</h1>
						<div class="entry-content">

							<p>{{$jobOffer->description}}</p>
							<h6 class="text-uppercase">Disponible hasta: {{$jobOffer->expires_at}}</h6>
						</div>
					</div>
					<p class="topmargin_35">
						<a href="{{route('jobs')}}" class="theme_button color1 block_button">Volver</a>
					</p>
				</article>
			</div>
		</div>
	</div>
</section>
@endsection
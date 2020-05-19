@extends('layouts.app')

@section('content')

<section class="ls section_padding_top_150 section_padding_bottom_150">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="isotope_container isotope row masonry-layout columns_padding_30 columns_margin_bottom_50">

					@foreach($services as $service)

					<div class="isotope-item col-xs-12 col-sm-6 col-md-4">
						<article class="vertical-item content-padding big-padding ds ms with_shadow text-center">
							<div class="item-media"> <img src="images/services-square/{{$service->image}}" alt="{{$service->name}}"> </div>
							<div class="item-content">
								<header class="entry-header">
									<h3 class="entry-title text-uppercase"> <a href="service-single.html">{{$service->name}}</a> </h3>
								</header>
								<p>{{Str::limit($service->description, 40)}}</p>
								<p class="topmargin_35"> <a href="{{route('service.show', $service->slug)}}" class="theme_button color1 block_button">Ver más</a> </p>
							</div>
						</article>
					</div>

					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>

@endsection
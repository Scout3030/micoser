@extends('layouts.app')

@section('content')

<section class="page_breadcrumbs cs background_cover breadcrumbs1 section_padding_50 columns_padding_5">
	<div class="container">
		<div class="row"> <span class="section_bg_header">Servicios</span>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
				<h1 class="sr-only">{{$service->name}}</h1>
			</div>
		</div>
	</div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4">
				<article class="vertical-item content-padding big-padding with_background">
					<div class="item-media-wrap">
						<div class="item-media"> <img src="/images/services/{{$service->image}}" alt=""> </div>
					</div>
					<div class="item-content">
						<h1 class="entry-title">{{$service->name}}</h1>
						<div class="entry-content">
							<p>{{$service->description}}</p>
							<h3 class="text-uppercase">{{$service->subtitle}}</h3>

							<ul class="list2 grey">
								@foreach(Str::of($service->characteristics)->explode('|') as $characteristic)
								<li> {{$characteristic}}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</article>
			</div>
			<!-- sidebar -->
			<aside class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-md-pull-8 col-lg-pull-8 col-sm-offset-3 col-md-offset-0">
				<div class="widget widget_nav_menu greylinks">
					<h3 class="widget-title">Otros servicios</h3>
					<ul>
						@foreach($services as $service)
						<li><a href="{{route('service.show', $service->slug)}}">{{$service->name}}</a></li>
						@endforeach
					</ul>
				</div>
			</aside>
			<!-- eof aside sidebar -->
		</div>
	</div>
</section>

@endsection
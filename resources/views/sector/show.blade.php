@extends('layouts.app')

@section('content')
<section class="page_breadcrumbs cs background_cover breadcrumbs1 section_padding_50 columns_padding_5">
	<div class="container">
		<div class="row"> <span class="section_bg_header">Sectores</span>
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
				<h1 class="sr-only">{{$sector->name}}</h1>
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
						<div class="item-media"> <img src="/images/sectors/{{$sector->image}}" alt=""> </div>
					</div>
					<div class="item-content">
						<h1 class="entry-title">{{$sector->name}}</h1>
						<div class="entry-content">
							<p>{{$sector->description}}</p>
							<h3 class="text-uppercase">Brindamos asistencia en:</h3>

							<ul class="list2 grey">
								@foreach(Str::of($sector->characteristics)->explode('|') as $characteristic)
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
					<h3 class="widget-title">Otros sectores</h3>
					<ul>
						@foreach($sectors as $sector)
						<li><a href="{{route('sector.show', $sector->name)}}">{{$sector->name}}</a></li>
						@endforeach
					</ul>
				</div>
			</aside>
			<!-- eof aside sidebar -->
		</div>
	</div>
</section>
@endsection
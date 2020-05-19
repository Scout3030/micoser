@extends('layouts.app')

@section('content')
<section class="page_breadcrumbs cs background_cover breadcrumbs1 section_padding_50 columns_padding_5">
	<div class="container">
		<div class="row">
			<span class="section_bg_header">Nuestros sectores</span>
		</div>
	</div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="isotope_container isotope row masonry-layout columns_padding_30 columns_margin_bottom_50">
					@foreach($sectors as $sector)
					<div class="isotope-item col-xs-12 col-sm-6">
						<article class="post format-standard vertical-item content-padding big-padding with_background text-center">
							<div class="item-media entry-thumbnail"> <img src="images/sectors/{{$sector->image}}" alt=""> </div>
							<div class="item-content">
								<header class="entry-header">
									<h3 class="entry-title"> <a href="{{route('sector.show', $sector->slug)}}">{{$sector->name}}</a> </h3>
								</header>
								<div class="entry-content">
									<p>{{$sector->description}}</p>
								</div>
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
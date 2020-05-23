@extends('layouts.app')

@section('content')

<section class="page_breadcrumbs cs background_cover breadcrumbs1 section_padding_50 columns_padding_5">
	<div class="container">
		<div class="row"> <span class="section_bg_header">Bolsa de trabajo</span>
		</div>
	</div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-8">
				@forelse($jobs as $job)
				@if($job->status != App\JobOffer::INACTIVE || $job->status != App\JobOffer::PAUSED)
				@if($job->expires_at > now())
				<article class="post format-standard vertical-item content-padding big-padding with_background">
					<div class="item-content">
						<header class="entry-header">
							<div class="entry-meta inline-content with_dividers highlightlinks highlight">
								<span>
									<a href="blog-single-left.html">
										<time datetime="2017-10-03T08:50:40+00:00">
										{{$job->created_at->format('d-m-Y')}}</time>
									</a>
								</span>
							</div>
							<h3 class="entry-title big">
								<a href="{{route('job.show', $job->slug)}}">{{$job->title}}</a> </h3>
						</header>
						<div class="entry-content">
							<p>{{Str::limit($job->description, 300)}}</p>
						</div>
						<!--<button class="btn">Ver más</button>-->
						<p class="topmargin_35">
							<a href="{{route('job.show', $job->slug)}}" class="theme_button color1 block_button">Ver detalles</a>
						</p>
					</div>
				</article>
				@endif
				@endif
				@empty
				No hay ofertas de empleo registradas por el momento
				@endforelse
				<div class="topmargin_60 text-center">
					{{$jobs->links()}}
				</div>
			</div>
			<!--eof .col-sm-8 (main content)-->
			<!-- sidebar -->
			<aside class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4">
				<div class="with_background with_padding">
					<div class="widget widget_gallery">
						<h3 class="widget-title">Nuestros proyectos</h3>
						<div class="isotope_container isotope row masonry-layout columns_padding_5">
							<div class="isotope-item col-xs-6">
								<div class="vertical-item ds">
									<div class="item-media"> <img src="{{asset('images/gallery-square/01.jpg')}}" alt="">
										<div class="media-links">
											<div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/01.jpg')}}"></a> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="isotope-item col-xs-6">
								<div class="vertical-item ds">
									<div class="item-media"> <img src="{{asset('images/gallery-square/02.jpg')}}" alt="">
										<div class="media-links">
											<div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg')}}"></a> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="isotope-item col-xs-6">
								<div class="vertical-item ds">
									<div class="item-media"> <img src="{{asset('images/gallery-square/03.jpg')}}" alt="">
										<div class="media-links">
											<div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/03.jpg')}}"></a> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="isotope-item col-xs-6">
								<div class="vertical-item ds">
									<div class="item-media"> <img src="{{asset('images/gallery-square/04.jpg')}}" alt="">
										<div class="media-links">
											<div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/04.jpg')}}"></a> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="isotope-item col-xs-6">
								<div class="vertical-item ds">
									<div class="item-media"> <img src="{{asset('images/gallery-square/05.jpg')}}" alt="">
										<div class="media-links">
											<div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/05.jpg')}}"></a> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="isotope-item col-xs-6">
								<div class="vertical-item ds">
									<div class="item-media"> <img src="{{asset('images/gallery-square/06.jpg')}}" alt="">
										<div class="media-links">
											<div class="links-wrap"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/06.jpg')}}"></a> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- eof aside sidebar -->
		</div>
	</div>
</section>

@endsection
@extends('layouts.admin-app')

@section('breadcrumb')
@include('admin.shared.breadcrumb', ['title' => 'Crear / editar empleo', 'icon' => 'lnr-briefcase'])
@endsection

@section('content')

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
        <h6 class="alert-heading"><strong>{{ session('message') }}</strong></h6>
    	<p>{{ session('description') }}</p>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
	<div class="col-md-6">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title">Nueva oferta de empleo</h5>
				<form
					action="{{$jobOffer->id ? route('admin.job-offer.update', $jobOffer->slug) : route('admin.job-offer.store') }}"
					method="POST"
					enctype="multipart/form-data"
					novalidate
					>
					@csrf
					@if($jobOffer->id)
					@method('PUT')
					@endif
					<div class="position-relative form-group">
						<label for="name" class="">Titulo de la oferta</label>
						<input name="title" id="name" placeholder="Titulo" type="text" class="form-control" value="{{$jobOffer->id ? $jobOffer->title : old('title')}}">
					</div>
					<div class="position-relative form-group">
						<label for="description">Descripción</label>
                        <textarea rows="1" class="form-control autosize-input" style="max-height: 1000px; height: 300px;" placeholder="Incluye datos detallados de lo oferta de empleo" name="description">{{$jobOffer->id ? $jobOffer->description : old('description')}}</textarea>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<div class="position-relative form-group">
								<label for="expires_at" class="">Fecha de expiración</label>
								<input type="text" class="form-control" data-toggle="datepicker" name="expires_at" value="{{$jobOffer->id ? date("m/d/Y", strtotime($jobOffer->expires_at)) : old('expires_at')}}" autocomplete="off"/>
							</div>
						</div>
					</div>
					<button class="mt-1 btn btn-primary">{{$btnText}}</button>
				</form>
			</div>
		</div>
	</div>

</div>
@endsection


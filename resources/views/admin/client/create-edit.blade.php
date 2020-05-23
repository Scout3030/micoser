@extends('layouts.admin-app')

@section('breadcrumb')
@include('admin.shared.breadcrumb', ['title' => 'Crear cliente', 'icon' => 'lnr-user'])
@endsection

@section('content')

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
        <h6 class="alert-heading"><strong>{{ session('message') }}</strong></h6>
    	<p>{{ session('description') }}</p>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-success alert-dismissible fade show" role="alert">
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
			<div class="card-body"><h5 class="card-title">Información del cliente</h5>
				<form
					action="{{$client->id ? route('admin.client.update', $client->id) : route('admin.client.store') }}"
					method="POST"
					enctype="multipart/form-data"
					novalidate
					>
					@csrf
					@if($client->id)
					@method('PUT')
					@endif
					<div class="position-relative form-group">
						<label for="name" class="">Cliente</label>
						<input name="name" id="name" placeholder="Nombre del cliente" type="text" class="form-control" value="{{$client->id ? $client->name : old('name')}}" autocomplete="off">
					</div>
					<div class="position-relative form-group">
						<label for="document" class="">RUC / DNI</label>
						<input name="document" id="document" placeholder="N° de documento del cliente" type="text" class="form-control" value="{{$client->id ? $client->document : old('document')}}" autocomplete="off">
					</div>
					<div class="position-relative form-group">
						<label for="address" class="">Dirección</label>
						<input name="address" id="address" placeholder="Dirección del cliente" type="text" class="form-control" value="{{$client->id ? $client->address : old('address')}}" autocomplete="off">
					</div>
					<div class="position-relative form-group">
						<label for="phone" class="">Teléfono</label>
						<input name="phone" id="phone" placeholder="Teléfono del cliente" type="text" class="form-control" value="{{$client->id ? $client->phone : old('phone')}}" autocomplete="off">
					</div>
					<div class="position-relative form-group">
						<label for="email" class="">Correo electrónico</label>
						<input name="email" id="email" placeholder="Correo del cliente" type="email" class="form-control" value="{{$client->id ? $client->email : old('email')}}" autocomplete="off">
					</div>
					<button class="mt-1 btn btn-primary">{{$btnText}}</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

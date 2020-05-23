@extends('layouts.admin-app')

@section('breadcrumb')
@include('admin.shared.breadcrumb', ['title' => 'Crear cotización', 'icon' => 'lnr-file-empty'])
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
        <h6 class="alert-heading"><strong>{{ session('message') }}</strong></h6>
    	<p>{{ session('description') }}</p>
    </div>
@endif
<div class="row">
	<div class="col-md-12">
		<div class="main-card mb-3 card">
			<div class="card-body"><h5 class="card-title">Crear cotización</h5>
				<!-- <form
					action="{{$quotation->id ? route('admin.quotation.update', $quotation->id) : route('admin.quotation.store') }}"
					method="POST"
					enctype="multipart/form-data"
					novalidate
					>
					@csrf
					@if($quotation->id)
					@method('PUT')
					@endif
					<div class="form-row">
						<div class="col-md-8 col-sm-6">
							<div class="position-relative form-group">
								<label for="name" class="">Cliente</label>
								<select class="multiselect-dropdown form-control">
									<optgroup label="Clientes">
										@foreach(App\Client::orderBy('name')->get() as $client)
										<option value="{{$client->id}}">{{$client->name}} / {{$client->document}}</option>
										@endforeach
									</optgroup>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="text-right">
								<button class="btn-icon btn-pill btn btn-success"><i class="lnr-plus-circle btn-icon-wrapper"> </i>Agregar nuevo item</button>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2 col-sm-6">
                            <div class="position-relative form-group">
                            	<label class="">Cantidad</label>
                            	<input name="qty" type="number" class="form-control">
                            </div>
                    	</div>
                        <div class="col-md-5 col-sm-6">
                            <div class="position-relative form-group">
                            	<label class="">Descripción</label>
                            	<textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    	<div class="col-md-2 col-sm-6">
                            <div class="position-relative form-group">
                            	<label class="">Precio unitario (S/)</label>
                            	<input name="price" type="text" class="form-control">
                            </div>
                    	</div>
                    	<div class="col-md-2 col-sm-6">
                            <div class="position-relative form-group">
                            	<label class="">Total (S/)</label>
                            	<input type="text" class="form-control" readonly>
                            </div>
                    	</div>
                    	<div class="col-md-1 col-sm-6">
                            <div class="position-relative form-group">
                            	<button class="mb-2 mr-2 btn-icon btn-icon-only btn-pill btn btn-danger">
                            		<i class="lnr-cross-circle btn-icon-wrapper"> </i>
                            	</button>
                            </div>
                    	</div>
                    </div>
                    <div class="form-row">
						<div class="col-md-7 col-sm-6">
                            <div class="position-relative form-group">
                            	<label class="">Datos adicionales</label>
                            	<textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="position-relative form-group">
                            	<label class="">Tiempo de entrega</label>
                            	<input type="text" class="form-control">
                            </div>
                    	</div>
					</div>
					<button class="mt-1 btn btn-primary">{{$btnText}}</button>
				</form> -->
				<quotation-form
                :clients="{{ App\Client::orderBy('name')->get() }}"
                ></quotation-form>
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
@if (session('message'))
<script>
    localStorage.clear();
</script>
@endif
@endpush

@extends('layouts.admin-app')

@section('breadcrumb')
@include('admin.shared.breadcrumb', ['title' => 'Ofertas de empleo', 'icon' => 'lnr-briefcase'])
@endsection

@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <button class="mb-2 mr-2 btn btn-primary btn-sm btn-block" onclick="window.location.replace('{{route('admin.job-offer.create')}}');">Crear oferta de empleo
        </button>
    </div>
</div>

@if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
        <h6 class="alert-heading"><strong>{{ session('message') }}</strong></h6>
        <p>{{ session('description') }}</p>
    </div>
@endif

<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="products-table" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Creación</th>
                <th>Expiración</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Creación</th>
                <th>Expiración</th>
                <th>Acciones</th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@push('scripts')
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        let dt;
        $(document).ready(function() {
            dt = $("#products-table").DataTable({
                pageLength: 5,
                lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.job-offer.datatable') }}',
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                columns: [
                    {data: 'id', visible: false},
                    {data: 'title'},
                    {data: 'status'},
                    {data: 'created_at'},
                    {data: 'expires_at'},
                    {data: 'actions'}
                ]
            });
        })
    </script>
@endpush
@extends('layouts.admin-app')

@section('content')

<!-- @ include('admin.dashboard.widgets') -->

<!-- <sales-chart></sales-chart> -->
<div class="row">
	<div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card-shadow-primary card-border text-white mb-3 card bg-primary">
            <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner bg-primary">
                    <div class="menu-header-content">
                        <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                            <div class="avatar-icon"><img src="/images/default_user.png" alt="{{auth()->user()->name}}"></div>
                        </div>
                        <div>
                        	<h5 class="menu-header-title">{{auth()->user()->name}}</h5>
                        	<h6 class="menu-header-subtitle">Bienvenido</h6>
                        </div>
                        <!--<div class="menu-header-btn-pane pt-1">
                            <button class="btn-icon btn btn-dark btn-sm"><i class="pe-7s-config btn-icon-wrapper"> </i>View Complete Profile</button>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="text-center d-block card-footer">
                <button class="btn-shadow-dark btn-wider btn btn-dark">Mi perfil</button>
            </div>
        </div>
    </div>




	<div class="col-md-12 col-lg-6 col-xl-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="card-title text-center">Elementos rápidos</div>
                <div class="text-center">
                    <button class="btn btn-success mr-2 mb-2 block-element-btn-example-2" onclick="window.location.href='{{route('admin.job-offer.create')}}'">
                        Crear oferta de empleo
                    </button>
                    <button class="btn btn-danger mr-2 mb-2 block-element-btn-example-1" onclick="window.location.href='{{route('admin.quotation.create')}}'">
                        Crear cotizacion
                    </button>
                </div>
            </div>
        </div>
	</div>

</div>

<!-- @ include('admin.dashboard.best-selling-products') -->

<!-- @ include('admin.dashboard.sales-cost-graphic') -->

@endsection
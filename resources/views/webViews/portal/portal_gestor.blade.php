@php    use App\Models\ProductoUsuario;use App\Models\TipoProducto;@endphp
{!! PageBuilder::section('head') !!}

@include('webViews.portal._portalformheader',['headerText' => 'Crear'])

<form id="añadirProducto" method="POST" action="{{ route('gestor.store') }}">

@include('webViews.portal._portalform',['productoEditar' => null])


{!! PageBuilder::section('footer') !!}

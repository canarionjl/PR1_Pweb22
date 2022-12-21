@php    use App\Models\ProductoUsuario;use App\Models\TipoProducto;@endphp
{!! PageBuilder::section('head') !!}

@include('themes._portalformheader',['btnText' => 'Confirmar'])

<form id="añadirProducto" method="POST" action="{{ route('gestor.store') }}">

@include('themes._portalform',['btnText' => 'Confirmar',
'productoEditar' => null])


{!! PageBuilder::section('footer') !!}

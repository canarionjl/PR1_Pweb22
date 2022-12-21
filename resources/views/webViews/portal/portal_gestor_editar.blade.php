@php    use App\Models\ProductoUsuario;use App\Models\TipoProducto;@endphp
{!! PageBuilder::section('head') !!}

@include('webViews.portal._portalformheader',['btnText' => 'Confirmar'])

<form id="añadirProducto" method="POST" action="{{ route('gestor.update',$productoEditar) }}">
@method('PATCH')
@include('webViews.portal._portalform',['btnText' => 'Confirmar'])


{!! PageBuilder::section('footer') !!}

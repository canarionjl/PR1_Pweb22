@php    use App\Models\ProductoUsuario;use App\Models\TipoProducto;@endphp
{!! PageBuilder::section('head') !!}

@include('themes/temaGrupo3/_portalformheader',['btnText' => 'Confirmar'])

<form id="añadirProducto" method="POST" action="{{ route('gestor.update',$productoEditar) }}">
@method('PATCH')
@include('themes/temaGrupo3/_portalform',['btnText' => 'Confirmar'])


{!! PageBuilder::section('footer') !!}

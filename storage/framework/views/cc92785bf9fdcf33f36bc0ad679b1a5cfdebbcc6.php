<?php    use App\Models\ProductoUsuario;use App\Models\TipoProducto;?>
<?php echo PageBuilder::section('head'); ?>


<?php echo $__env->make('webViews.portal._portalformheader',['headerText' => 'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form id="añadirProducto" method="POST" action="<?php echo e(route('gestor.update',$productoEditar)); ?>">
<?php echo method_field('PATCH'); ?>

<?php echo $__env->make('webViews.portal._portalform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/portal/portal_gestor_editar.blade.php ENDPATH**/ ?>

<?php    use App\Models\ProductoUsuario;use App\Models\TipoProducto; ?>
<?php echo csrf_field(); ?>
<label for="tipoProducto">Nombre:</label><br>
<div class="chart">
    <select class="nombreElement" id="tipoProducto" name="tipoProducto_id" form="añadirProducto">
        <option disabled
                <?php if($productoEditar==null): ?>
                    selected
                <?php endif; ?>
                value> Elige el tipo de producto</option>
        <?php $__empty_1 = true; $__currentLoopData = TipoProducto::select('*')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option
                <?php if(($productoEditar!=null ? $productoEditar->producto->tipoProducto_id : -1) == $producto->id): ?>
                     selected
                <?php endif; ?>
                value="<?php echo e($producto->id); ?>"><?php echo e(ucfirst($producto->nombre)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>
    </select>
    <input value="<?php echo e($productoEditar!=null ? $productoEditar->producto->titulo : ''); ?>" class="nombreElement" type="text" id="nombre" name="titulo"
           placeholder="Nombre específico del producto"><br><br>
</div>

<label for="precio">Precio:</label><br>
<input value="<?php echo e($productoEditar!=null ? $productoEditar->precio : ''); ?>" style="" type="number" step="0.01" id="precio" name="precio" placeholder="Precio en euros (€)">
<span style="font-size: 23px;position:relative;top:2px;"> €</span><br><br>

<label for="cantidad">Cantidad:</label><br>
<input value="<?php echo e($productoEditar!=null ? $productoEditar->cantidad : ''); ?>" style="" type="number" step="1" id="cantidad" name="cantidad" placeholder="Cantidad disponible">
<strong style="font-size:18px;position:relative;top:2px;"> unidades</strong><br><br>

<div class="chart">
    <div class="element"><label for="equivalencia">Equivalencia:</label><br>
        <span style="font-size: 17px">1&nbsp;&nbsp;&nbsp;</span><select id="equivalencia" name="unidad"
                                                                        form="añadirProducto">
            <?php $__empty_1 = true; $__currentLoopData = ProductoUsuario::getUnidades(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option
                    <?php if(($productoEditar!=null ? $productoEditar->unidad : '') === $unidad): ?>
                        selected
                    <?php endif; ?>
                    value="<?php echo e($unidad); ?>"><?php echo e(ucfirst($unidad)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        </select></div>

    <div class="element">
        <label for="conversion">&nbsp; </label><br>
        <span style="font-size:20px;">➝</span>
        <input value="<?php echo e($productoEditar!=null ? $productoEditar->equivalenciaGrUnidad : ''); ?>" type="number" id="conversion" name="equivalenciaGrUnidad" placeholder="Peso en gramos (g)"><strong>
            gramos</strong>
    </div>
</div>

<button class="editButton"><?php echo e($btnText); ?></button>
</form>
</div>

<h1>Gestión Productos</h1>
<div class="contenedor">
    <div class="contenedorInterno">
        <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productoUsuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="elemento"><h3> <?php echo e($productoUsuario->producto->titulo); ?></h3>
                <div><strong>Tipo: <?php echo e(ucfirst($productoUsuario->producto->tipo->nombre)); ?> </strong></div>
                <div><strong>Precio: <?php echo e($productoUsuario->precio); ?> €</strong></div>
                <div><strong>Cantidad: <?php echo e($productoUsuario->cantidad); ?></strong></div>
                <span><strong>Equivalencia:  1 <?php echo e($productoUsuario->unidad); ?></strong></span>
                <span><strong>➝</strong></span>
                <span><strong> <?php echo e($productoUsuario->equivalenciaGrUnidad); ?>gramos</strong></span>
                <br><br>
                <div class="buttons">
                    <div class="buttonContainer">
                        <button onclick="editButtonClicked(<?php echo e($productoUsuario->id); ?>)" class="editButton">Editar</button>
                    </div>
                    <div class="buttonContainer">
                        <button onclick="deleteButtonClicked(<?php echo e($productoUsuario->id); ?>)" class="deleteButton">Eliminar</button>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php echo e("Vacío"); ?>

        <?php endif; ?>
    </div>
</div>
</section>
<script src="jquery-3.6.1.min.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<script>
    function editButtonClicked(id) {
        window.location='/portal/gestor/'+id+'/edit';
    }

    function deleteButtonClicked(id){
        var url = 'http://proyectoweb22.test/portal/gestor/'+id;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: 'http://proyectoweb22.test/portal/gestor/'+id,
            type: 'DELETE',

            success: function(result) {

            }
        });

    }
</script>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/_portalform.blade.php ENDPATH**/ ?>
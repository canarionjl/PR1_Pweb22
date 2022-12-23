<?php echo PageBuilder::section('head'); ?>


<br>
<style>
    h3 {
        font-size: 22px;
    }
</style>
<section class="container text-center" style="border-radius: 50px">
    <?php if($message_list): ?>
        <div
            style="display:flex; padding:20px; justify-content: center; margin: 20px;">

            <h2> FORO PARA USUARIOS DE TIPO <?php echo e(strtoupper(Auth::user()->tipoUsuario)); ?> </h2>
        </div>
        <?php $__currentLoopData = $message_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                style="display: flex; flex-direction: column; gap:15px; background: #ccf1cc;  margin: 20px; border-radius: 30px">
                <div
                    style="display: flex; justify-items: baseline; justify-content:start; gap:50px; margin-left: 50px;">
                    <div><h3><?php echo e($message->titulo); ?></h3></div>
                    <div><h3><?php echo e($message->user->nombre); ?></h3></div>
                    <div><h3><?php echo e($message->date); ?></h3></div>
                </div>
                <div style="margin-left: 20px; margin-right:20px; display:flex; justify-content: center"><h5
                        style="font-size: 16px"><?php echo e($message->content); ?></h5></div>

                <div>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div
            style="display:flex; padding:20px; align-items: baseline; justify-content: space-between; background: rgba(139,252,147,0.78); margin: 20px;">

            <h4>NO HAY NINGÚN MENSAJE PUBLICADO ACTUALMENTE</h4>
            <a href="/" type="button" class="btn gradient-bg">
                VOLVER A INICIO</a>
        </div>
    <?php endif; ?>

</section>

<section class="container text-center"
         style=" margin-top:30px; margin-bottom: 30px; background-color:#ccf1cc; border: 5px solid black; border-radius: 50px ">
    <form method="POST" action="<?php echo e(route('addMessage')); ?>" name="añadirMensaje">
        <?php echo csrf_field(); ?>
        <div>
            <h2> AÑADIR UN NUEVO MENSAJE AL FORO </h2>
            <div>

                <div style="display: flex; flex-direction: column">
                    <div><h4>Título (Máx: 64 caracteres)</h4></div>
                    <div><input name="titulo" id="increment" maxlength="64" style="width: 600px"></div>
                </div>

                <div style="display: flex; flex-direction: column">
                    <div><h4>Contenido (Máx: 255 caracteres)</h4></div>
                    <div><textarea name="contenido"  maxlength="255"
                                   style="width: 800px; height: 100px"></textarea></div>
                </div>

                <input class="btn gradient-bg" type="submit" value="AÑADIR MENSAJE">

            </div>
        </div>
    </form>
</section>
<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views//webViews/social/muro.blade.php ENDPATH**/ ?>
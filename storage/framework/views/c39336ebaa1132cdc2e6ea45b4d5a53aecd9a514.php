<?php echo PageBuilder::section('head'); ?>


<style>
    input {
        border: 1px solid #939393;
        border-radius: 5px;
        background-color: rgba(243, 243, 243, 0.81);
        transition: all .3s ease-out;
        margin: auto;
        height: 4rem;
        font-size: 1.4em;
        width: 100%;
    }

    :focus-visible {
        outline: #d7d7d7 auto 1px;
    }

    input:focus {
        background-color: rgba(255, 255, 255, 1)
    }

    form {
    }

    main div {
        display: block;
        padding: .5rem 3rem .5rem 7rem
    }

    main section {
        height: 1150px;
        max-width: 40rem;
        display: block;
    }

    h1 {
        padding: 1rem 1rem 1rem 3rem;
    }

    main {
        display: flex;
        justify-content: center;
        padding: 190px 0 100px 0;
        background-color: white;

    }

    .h2register {
        padding: 1rem 1rem 1rem 1rem;
        font-weight: bold;
        font-size: 3rem;
        margin: 0 0 0 0;
    }

    .h3register {
        padding: 1rem 1rem 1rem 1rem;
        font-size: 2rem;
        font-weight: 100;
        margin: 0 0 0 0;
    }

    .fSection {
        border-right: 1px solid rgba(0, 0, 0, 0.2);
        margin-top: 20px;
    }

    .sSection {
        width: 40rem;
    }

    .inputIntro {
        padding: 0 3rem 0 5rem;
        font-size: 2.5rem;
    }

    .inputIntro:after {
        margin: 0 0 0 0;
        background: none;
    }

    .secondText {
        margin-bottom: 30px;

    }

    .registerButton {
        border: 1px solid #939393;
        border-radius: 5px;
        background-color: rgb(143, 236, 143);
        transition: all .3s ease-out;
        margin: auto auto 35px auto;
        height: 4rem;
        font-size: 1.4em;
        width: 100%;
    }

    .registerButton:hover {
        background-color: rgb(175, 252, 175);
    }

    .registerButton:after {

    }

    .register2Button {
        border: 1px solid #939393;
        border-radius: 5px;
        background-color: rgba(243, 243, 243, 0.81);
        transition: all .3s ease-out;
        margin: auto;
        height: 4rem;
        font-size: 1.4em;
        width: 100%;
    }

    .register2Button:hover {
        background-color: rgb(222, 255, 222);
    }

    #fButton:after {
        content: "";
        display: block;
        margin: 0 0 20px 0;
        background: #c2c2c2;
        height: 1px;
        width: 100%;
        padding: 0 5px 0 5px;
    }

    input[type=radio] {
        height: 1.5rem;
        display: inline;
        margin: 0 0 0 0;
        padding: 0 0 0 0;
        width: auto;
    }

    label {
        display: inline;
        margin: 0 0 0 0;
        padding: 0 20px 0 1px;
    }

    .radio {
        display: inline;
        padding: 0
    }
</style>
<main>
    <section class="fSection">
        <h2 class="h2register">Gestiona tus pedidos</h2>
        <h3 class="h3register">Ten el control de todos tus pedidos y recibe notificaciones con el seguimiento</h3>
        <h2 class="h2register">Lista de deseos personalizada</h2>
        <h3 class="h3register">Guarda tus productos favoritos en las listas de deseos personalizadas</h3>
    </section>
    <section class="sSection">
        <h1>Crear cuenta</h1>
        <form id="registrar" action="register" method="POST">
            <?php echo csrf_field(); ?>
            <h3 class="inputIntro">Nombre de usuario:</h3>
            <div>
                <input name="username" type="text">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <h6 style="color:red"><?php echo e($message); ?></h6>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <h3 class="inputIntro">Email:</h3>
            <div class="secondText">
                <input name="email" type="email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <h6 style="color:red"><?php echo e($message); ?></h6>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <h3 class="inputIntro">Contraseña:</h3>
            <div class="secondText">
                <input name="password" type="password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <h6 style="color:red"><?php echo e($message); ?></h6>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <h3 class="inputIntro">Repita la contraseña:</h3>
            <div class="secondText">
                <input name="password_confirmation" type="password">
                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <h6 style="color:red"><?php echo e($message); ?></h6>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <h3 class="inputIntro">Tipo de usuario:</h3>
            <div class="secondText">
                
                <input type="radio" id="type1" name="userType" value="Cliente" checked="checked">
                <label for="type1">Cliente</label>
                
                
                <input type="radio" id="type2" name="userType" value="Vendedor">
                <label for="type2">Vendedor</label>
                
                
                <input type="radio" id="type3" name="userType" value="Productor">
                <label for="type3">Productor</label>
                
            </div>
            <div>
            <span>
                <input name="policy" id="policy" style="width:20px;" type="checkbox" form="registrar" value="on"></span>
            <span style="position:relative; bottom:14px; left:8px;">He leído y acepto la <a href="/proteccion-datos">política de privacidad</a></span>
                <?php $__errorArgs = ['policy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <h6 style="color:red"><?php echo e($message); ?></h6>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div id="fButton">
                <button type="submit" class="registerButton">Crear cuenta</button>
            </div>
        </form>
        <div>
            <button class="register2Button" onclick="location.href='<?php echo e(route('login')); ?>'">Iniciar Sesión</button>
        </div>
    </section>
</main>
<?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/auth/register.blade.php ENDPATH**/ ?>
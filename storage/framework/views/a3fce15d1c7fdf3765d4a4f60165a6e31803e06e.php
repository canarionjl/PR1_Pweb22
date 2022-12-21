<?php echo PageBuilder::section('head'); ?>


<section style = "background: transparent">

    <?php if($name_of_user): ?>
            <?php
            switch ($name_of_user){
                case "JoseLuis":
                    include ('../Practicas/JoseLuisPrivado.html');
                    break;
                case "Himar":
                    include ('../Practicas/HimarPrivado.html');
                    break;
                case "Alvaro":
                    include ('../Practicas/AlvaroPrivado.html');
                    break;
                default:
                    include ('../resources/views/themes/temaGrupo3/errors/404.blade.php');
                    break;
            }
            ?>
    <?php endif; ?>

</section>


  <?php echo PageBuilder::section('footer'); ?>

<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/webViews/developerTeam/paginaPersonal_grupo3.blade.php ENDPATH**/ ?>
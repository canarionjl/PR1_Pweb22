<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>title</title>

</head>
<body>
        <?php echo e($nombre ?? "Prueba"); ?>

        <?php
        include("../Practicas/JoseLuisPrivado.html")
        ?>
</body>
</html>
=======
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

>>>>>>> 94b17ec7356c847964cd82654fed045a327169f9
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/paginaPersonal_grupo3.blade.php ENDPATH**/ ?>
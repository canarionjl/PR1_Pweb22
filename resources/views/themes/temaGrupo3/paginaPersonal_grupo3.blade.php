{!! PageBuilder::section('head') !!}

<section style = "background: transparent">

    @if($name_of_user)
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
    @endif

</section>


  {!! PageBuilder::section('footer') !!}

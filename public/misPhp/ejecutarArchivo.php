<?php

    if(empty($_POST["page"])){
        echo "No existe ninguna orden a ejecutar";
    } else{
        $page = $_POST["page"];
        echo "La orden a ejecutar es <a href=\"$page\">$page</a>";
    }
?>

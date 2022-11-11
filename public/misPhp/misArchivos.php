<?php
function directoryListing($dir)
{
    $files = scandir($dir);
    for ($i = 2; $i < count($files); $i++) {
        echo "<li style='padding-left:60px'>";
        if(preg_match("/Publico\.html/i", $files[$i]) || (preg_match("/\.php/i", $files[$i]) && $dir===".")) {
            echo "<a href=\"$dir/$files[$i]\">$files[$i]</a>";
        } elseif(preg_match("/Privado\.html/i", $files[$i])){
            $url = substr($files[$i],0, strpos($files[$i],"Privado.html"));
            echo "<a href=\"../paginaPersonal/$url\">$files[$i]</a>";
        }

        else {
            echo "$files[$i]";
        }

        echo "</li>";

    }
}
?>
<body>
<h1> Contenido de la carpeta <i>public</i>:</h1>
<?php
directoryListing("..");
?>
<h1> Contenido de la carpeta <i>Practicas</i>:</h1>
<?php
directoryListing("../../Practicas");
?>
<h1> Contenido de la carpeta <i>misPhp</i>:</h1>
<?php
directoryListing(".");
?>
<h1>Selecciona que archivo quieres ejecutar</h1>
<!--<form action="/misPhp/ejecutarArchivo.php" method="post">-->
<form action="/api/add" method="post">
    <select name="page">
        <option disabled selected value> -- elije una opción -- </option>
        <option value="/AlvaroPublico.html">/AlvaroPublico.html</option>
        <option value="/JoseLuisPublico.html">/JoseLuisPublico.html</option>
        <option value="/HimarPublico.html">/HimarPublico.html</option>
        <option value="/paginaPersonal/Alvaro">/paginaPersonal/Alvaro</option>
        <option value="/paginaPersonal/JoseLuis">/paginaPersonal/JoseLuis</option>
        <option value="/paginaPersonal/Himar">/paginaPersonal/Himar</option>
        <option value="/misPhp/ejecutarArchivo.php">/misPhp/ejecutarArchivo.php</option>
        <option value="/misPhp/menuArchivos.php">/misPhp/menuArchivos.php</option>
        <option value="/misPhp/miPrimeraPagina.php">/misPhp/miPrimeraPagina.php</option>
        <option value="/misPhp/misArchivos.php">/misPhp/misArchivos.php</option>
    </select>
    <input type="submit" value="Ejecutar">
</form>

</body>

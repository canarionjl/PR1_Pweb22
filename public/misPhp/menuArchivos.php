<?php
function directoryListing($dir)
{
    $files = scandir($dir);
    for ($i = 2; $i < count($files); $i++) {
        echo "<li style='padding-left:60px'>$files[$i]</li>";
    }
}
?>
<body>
<h1> Contenido de la carpeta <i>public</i>:</h1>
</body>

<?php
directoryListing("..");
?>

<body>
<h1> Contenido de la carpeta <i>Practicas</i>:</h1>
</body>

<?php
directoryListing("../../Practicas");
?>

<body>
<h1> Contenido de la carpeta <i>misPhp</i>:</h1>
</body>

<?php
directoryListing(".");
?>




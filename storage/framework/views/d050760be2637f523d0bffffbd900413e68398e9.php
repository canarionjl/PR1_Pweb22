<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="/">
                <?php echo PageBuilder::block('logo', ['height' => '60px']); ?>

            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php echo $items; ?>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/menus/default/menu.blade.php ENDPATH**/ ?>
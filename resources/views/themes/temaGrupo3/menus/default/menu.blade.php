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
{{--                {!! PageBuilder::block('logo', ['height' => '60px']) !!}--}}
                <img src="/uploads/logo.png"
                     style="width: auto; height:65px; padding: 5px"
                     alt="No Image Found">
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                {!! $items !!}
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

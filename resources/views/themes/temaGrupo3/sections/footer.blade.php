

<footer>
    <div style="position: relative;" class="container">
        <a style="background-color: rgba(255,255,255,0); color:white; padding:7px; border-radius: 15px; position: absolute; bottom:0; z-index: 1;" href="https://www.coastercms.org/privacy-policy">Política de privacidad</a>
        <a style="background-color: rgba(255,255,255,0); color:white; padding:7px; border-radius: 15px; position: absolute; bottom:0; left: 170px; z-index: 1;" href="/aviso-legal">Aviso legal</a>
        <a style="background-color: rgba(255,255,255,0); color:white; padding:7px; border-radius: 15px; position: absolute; bottom:0; left: 270px; z-index: 1;" href="/condiciones-generales">Condiciones</a>
        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="btn btn-default" id="scrollbutton2">{{ PageBuilder::block('scroll_to_top_text') }} &nbsp; <i class="fa fa-arrow-up"></i></button>
                <p>&copy; {{ PageBuilder::block('copyright') }} {!! date("Y") !!}. Powered by <a href="http://www.coastercms.org">Coaster CMS</a>.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ PageBuilder::js('jquery.min') }}"></script>
<script src="{{ PageBuilder::js('bootstrap.min') }}"></script>

@yield('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        $('#blogSearch').submit(function(event) {
            event.preventDefault();
            window.location.href = '{{ PageBuilder::pageUrl(PageBuilder::block('blog_search_page')) }}/'+$('#query').val();
        });

        $("#scrollbutton").click(function() {
            $('html, body').animate({
                scrollTop: $("#sec1").offset().top
            }, 1000);
        });

        $("#scrollbutton2").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        });

        $(window).scroll(function() {
            if($(this).scrollTop() > 30) {
                $('.navbar-inverse').addClass("morenav");
            }
            else{
                $('.navbar-inverse').removeClass("morenav");
            }
        });

    });
</script>

{!! PageBuilder::block('footer_html', ['source' => true]) !!}
</body>
</html>

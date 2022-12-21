

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <button class="btn btn-default" id="scrollbutton2"><?php echo e(PageBuilder::block('scroll_to_top_text')); ?> &nbsp; <i class="fa fa-arrow-up"></i></button>
                <p>&copy; <?php echo e(PageBuilder::block('copyright')); ?> <?php echo date("Y"); ?>. Powered by <a href="http://www.coastercms.org">Coaster CMS</a>.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo e(PageBuilder::js('jquery.min')); ?>"></script>
<script src="<?php echo e(PageBuilder::js('bootstrap.min')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){

        $('#blogSearch').submit(function(event) {
            event.preventDefault();
            window.location.href = '<?php echo e(PageBuilder::pageUrl(PageBuilder::block('blog_search_page'))); ?>/'+$('#query').val();
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

<?php echo PageBuilder::block('footer_html', ['source' => true]); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\proyectoweb22\resources\views/themes/temaGrupo3/sections/footer.blade.php ENDPATH**/ ?>
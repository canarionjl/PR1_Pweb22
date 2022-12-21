<?php AssetBuilder::setStatus('cms-editor', true); ?>

<h1>Adding New <?php echo $item_name; ?></h1>

<br/>

<?php echo Form::open(['class' => 'form-horizontal', 'id' => 'addForm', 'enctype' => 'multipart/form-data']); ?>


<div class="tabbable" id="contentTabs">

    <ul class="nav nav-tabs">
        <?php echo $tab['headers']; ?>

    </ul>

    <div class="tab-content">
        <?php echo $tab['contents']; ?>

    </div>

</div>

<?php echo Form::close(); ?>


<?php $__env->startSection('scripts'); ?>
    <script type='text/javascript'>
        $(document).ready(function () {

            selected_tab('#addForm', 0);
            updateListenPageUrl();
            updateListenGroupFields();
            updateListenLiveOptions();
            load_editor_js();
            headerNote();

            var link_show, url_prefix;
            $('#page_info\\[link\\]').change(function () {
                if ($(this).is(':checked')) {
                    url_prefix = $('#url-prefix').detach();
                    if (link_show) {
                        link_show.appendTo('#url-group');
                    }
                    $('#template_select').hide();
                }
                else {
                    if (url_prefix) {
                        url_prefix.prependTo('#url-group');
                    }
                    link_show = $('.link_show').detach();
                    $('#template_select').show();
                }
            }).trigger('change');

            $('#page_info\\[parent\\]').change(function () {
                $('#url-prefix').html(urlArray[$(this).val()]);
            });

        });
    </script>
<?php $__env->appendSection(); ?>
<?php /**PATH C:\laragon\www\proyectoweb22\vendor\coastercms\framework\resources/views/admin/pages/pages/add.blade.php ENDPATH**/ ?>
<!-- jQuery -->
<script src="<?php echo DIR_TEMPLATE ?>admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo DIR_TEMPLATE ?>admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo DIR_TEMPLATE ?>admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo DIR_TEMPLATE ?>admin/dist/alertifyjs/alertify.min.js"></script>
<script src="<?php echo DIR_TEMPLATE ?>admin/dist/js/custom.js"></script>
<script src="<?php echo DIR_TEMPLATE ?>admin/ckeditor/ckeditor.js"></script>
<script>         
     CKEDITOR.replace( 'content',{
          filebrowserBrowseUrl: '/mvc_tintuc/public/template/admin/ckfinder/ckfinder.html',
          filebrowserUploadUrl: '/mvc_tintuc/public/template/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
          filebrowserWindowWidth: '1000',
          filebrowserWindowHeight: '700'
     } );
</script>


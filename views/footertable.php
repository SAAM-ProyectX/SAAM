<div class="page-footer-fixed footer">
    <div class="footer-inner">
        &copy; 2015-2017 SAAM. Todos los derechos reservados - SAAM es una marca comercial registrada de SAAM Systems.
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>



<script src="<?php echo URL; ?>public/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo URL; ?>public/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="<?php echo URL; ?>public/plugins/excanvas.min.js"></script>
<script src="<?php echo URL; ?>public/plugins/respond.min.js"></script>
<![endif]-->
<script src="<?php echo URL; ?>public/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo URL; ?>public/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL; ?>public/scripts/app.js"></script>
<script src="<?php echo URL; ?>public/scripts/table-advanced.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        TableAdvanced.init();
    });
</script>


</body>
</html>

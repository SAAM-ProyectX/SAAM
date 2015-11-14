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

<script src="<?php echo URL; ?>public/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
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
<script src="<?php echo URL; ?>public/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/scripts/index.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        Index.init();
        Index.initCalendar();
        Index.initCharts();
        Index.initChat();
        Index.initMiniCharts();
        Index.initDashboardDaterange();
        Index.initIntro();
    });
</script>
<script>
    $(function(){
        $('#id').addClass('hover').removeClass('normal').fadeIn("slow");
        $('#closeSessionBtn').click(function(){
            document.location = "<?php echo URL; ?>Usuario/salir";
        });
        $('#buttonProfile').click(function(){
            document.location = "<?php echo URL; ?>Usuario/perfil";
        });
    });
</script>
</body>
</html>
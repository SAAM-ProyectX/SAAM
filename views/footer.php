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

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
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
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo URL; ?>public/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>public/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script type="text/javascript" src="<?php echo URL; ?>public/js/estilosProyectos.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/script.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/faqs.js"></script>


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

<script type="text/javascript">
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

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.inventario',function(){
            var $case = $(this).children('span').html();
            switch ($case){
                case 'Clientes':
                    $.ajax({
                        type:'POS',
                        url: '<?php URL?>Inventario/tabla',
                        data:"12"
                    }).done(function(response){
                       $('#dashboard').html(response);
                        alert($('.table td').size());
                        $('.table td').each(function(index){
                            $(this).html("HOla");
                        });

                    });
                    break;
                case 'Proveedores':
                    $.ajax({
                        type: 'POST',
                        url: '<?php URL?>Inventario/proveedores',
                        data:"12"
                    }).done(function(response){
                        $('#dashboard').html(response);
                    });
                    break;
                case 'Productos':
                    $.ajax({
                        type: 'POST',
                        url: '<?php URL?>Inventario/productos',
                        data:"12"
                    }).done(function(response){
                        $('#dashboard').html(response);
                        $('.title_Principal').html('Inventario');
                    });
                    break;
                default:

                    break;
            }
            /*$.ajax({
                type:'POST',
                url: '<?php URL;?>Inventario/inventario',
                data:"12"
            }).done(
                function(response){
                    $('#dashboard').html(response);
                    $('.title_Principal').html("ALGO");
                    $('.subtitle_Principal').html("Otra cosa");
                });*/
        });
        $(document).on('click','.row-details', function() {
            alert("Hola");
        });
    });
</script>
</body>
</html>

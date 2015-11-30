<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>SAAM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo URL; ?>public/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo URL; ?>public/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL; ?>public/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo URL; ?>public/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo URL; ?>public/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/plugins/select2/select2_metro.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/plugins/data-tables/DT_bootstrap.css" />
    <link rel="shortcut icon" href="<?php echo URL; ?>public/img/favicon.png" />

    <link href="<?php echo URL; ?>public/css/ourstyles.css" rel="stylesheet" type="text/css"/>
    <!--link href="<?php echo URL; ?>public/css/styleslogin.css" rel="stylesheet" type="text/css" />ddddddds
    <link href="<?php echo URL; ?>public/css/styleall.css" rel="stylesheet" type="text/css" /-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link href="<?php echo URL; ?>public/css/pages/timeline.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo URL; ?>public/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <link href="<?php echo URL; ?>public/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

</head>
<body class="page-header-fixed page-sidebar-closed">
<div class="header navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo URL; ?>">
                <img src="<?php echo URL; ?>public/img/favicon.png" alt="logo" class="logo"/>SAAM
            </a>
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="public/img/menu-toggler.png" alt="" />
            </a>
            <ul class="nav pull-right">
                <li class="dropdown" id="header_notification_bar">
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                Application error.
                                <span class="time">40 mins</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown" id="header_inbox_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-envelope"></i>
                        <span class="badge">1</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p>Usted tiene 1 nuevo mensaje</p>
                        </li>

                        <li>
                            <a href="inbox14c8.html?a=view">
                                <span class="photo"><img src="assets/img/avatar1.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Moises Barrera</span>
								<span class="time">2 hrs</span>
								</span>
								<span class="message">
								Descripción
								</span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="inbox.html">Ver todos los mensajes.<i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge">1</span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p>Usted tiene 1 tarea pendiente.</p>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">Entrega de documentos</span>
								<span class="percent">25%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 25%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">Ver todas las tareas.<i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="<?php echo URL; ?>public/img/usuarios/profile/<?php echo Session::getValue('U_DATA')['codigo']; ?>.jpg" class="logoPerfil"/>
                        <span class="username"><?php echo ucfirst(Session::getValue('U_DATA')['Nombre']); ?></span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL; ?>Usuario/perfil"><i class="icon-user"></i>Mi perfil</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> Mis tareas</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo URL; ?>Usuario/salir"><i class="icon-key"></i> Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
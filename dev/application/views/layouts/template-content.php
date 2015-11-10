<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Data Tables</title>
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
 

        <link href="<?php echo RESOURCES_PATH; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo RESOURCES_PATH; ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo RESOURCES_PATH; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo RESOURCES_PATH; ?>css/style.css" rel="stylesheet" />
        <link href="<?php echo RESOURCES_PATH; ?>css/style_responsive.css" rel="stylesheet" />
        <link href="<?php echo RESOURCES_PATH; ?>css/style_default.css" rel="stylesheet" id="style_color" />

        <link href="<?php echo RESOURCES_PATH; ?>assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo RESOURCES_PATH; ?>assets/uniform/css/uniform.default.css" />
        <script src="<?php echo RESOURCES_PATH; ?>js/jquery-1.8.3.min.js"></script>
        <script> var base_url = "<?php echo base_url(); ?>";</script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <div id="header" class="navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="javascript:void(0);">
                        OnlyQuiz<!--<img src="<?php echo RESOURCES_PATH; ?>img/logo.png_" alt="Cementerio" />-->
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <div id="top_menu" class="nav notify-row">
                        <!-- BEGIN NOTIFICATION -->
                        <ul class="nav top-menu">

                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <li class="dropdown" id="header_notification_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Nuevos">

                                    <i class="icon-bell-alt"></i>

                                    <span class="badge badge-success"></span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <li>
                                        <p>Alertas</p>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() . "adminbo/payment_management/nuevos" ?>">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>

                                            <span class="small italic"> Hay <?php echo $nuevos; ?> Nuevos registros que pidieron un PLan</span>
                                        </a>
                                    </li>

                                    <!--                                    <li>
                                                                            <a href="<?php echo base_url() . "admin/bloque_expiro_management" ?>">Mostrar Nichos</a>
                                                                        </li>-->
                                </ul>
                            </li>
                            <li class="dropdown" id="header_notification_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <i class="icon-bell-alt"></i>

                                    <span class="badge badge-danger"></span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <li>
                                        <p>Alertas</p>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() . "adminbo/payment_management/expiro" ?>">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>

                                            <span class="small italic"> Hay  Cuentas que expiraron</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- END NOTIFICATION DROPDOWN -->

                        </ul>
                    </div>
                    <!-- END  NOTIFICATION -->
                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu" >

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?>
                                    <img src="img/avatar1_small.jpg" alt="">
                                    <span class="username"></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">                                  

                                    <li><a href="<?php echo base_url() . "blogin/logout"; ?>"><i class="icon-key"></i> Salir</a></li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                        <!-- END TOP NAVIGATION MENU -->
                        <div style="padding-top: 10px; display: none;" class='loading'>
                            <img src="<?php echo RESOURCES_PATH; ?>img/loading.gif" alt="" width="40" height="40"/>
                        </div>
                        <button id="imprimirView" style="display: none;" type="button" onclick="imprimir();" class="btn btn-primary btn-lg">
                            Imprimir Comprobante
                        </button>
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">
            <!-- BEGIN SIDEBAR -->
            <div id="sidebar" class="nav-collapse collapse">
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <div class="navbar-inverse">
                    <form class="navbar-search visible-phone">
                        <input type="text" class="search-query" placeholder="Search" />
                    </form>
                </div>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="sidebar-menu">

                    <li class="has-sub">
                        <a href="javascript:;" class="">
                            <span class="icon-box"> <i class="icon-dashboard"></i></span>Configuration
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="<?php echo base_url() . "adminbo/user_management"; ?>">User</a></li>
                            <li><a class="" href="<?php echo base_url() . "adminbo/category_managament"; ?>">Category</a></li>
                            <li><a class="" href="<?php echo base_url() . "adminbo/section_managament"; ?>">Sections</a></li>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="<?php echo site_url('bo/user_management') ?>" class="">
                            <span class="icon-box"><i class="icon-glass"></i></span> User
                            <span class="arrow"></span>
                        </a>
                    </li> 
                    
                    <li class="has-sub">
                        <a href="<?php echo site_url('bo/city_management') ?>" class="">
                            <span class="icon-box"><i class="icon-glass"></i></span> Ciudad
                            <span class="arrow"></span>
                        </a>
                    </li> 

                    <li class="has-sub">
                        <a href="<?php echo site_url('bo/transport_management') ?>" class="">
                            <span class="icon-box"><i class="icon-key"></i></span> transporte
                            <span class="arrow"></span>
                        </a>
                    </li> 

                    <li class="has-sub">
                        <a href="<?php echo site_url('bo/route_management') ?>" class="">
                            <span class="icon-box"><i class="icon-key"></i></span> rutas
                            <span class="arrow"></span>
                        </a>
                    </li> 


                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->
            <div id="main-content">
                <br>
                <?php echo $content_for_layout ?>
            </div>
            <!-- END PAGE -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div id="footer">
            2015 &copy; Proyecto OnlyQuiz
            <div class="span pull-right">
                <span class="go-top"><i class="icon-arrow-up"></i></span>
            </div>
        </div>


        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->

        <script src="<?php echo RESOURCES_PATH; ?>assets/bootstrap/js/bootstrap.min.js"></script>   

        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="js/excanvas.js"></script>
        <script src="js/respond.js"></script>
        <![endif]-->   
        <script type="text/javascript" src="<?php echo RESOURCES_PATH; ?>assets/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo RESOURCES_PATH; ?>assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo RESOURCES_PATH; ?>assets/data-tables/DT_bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo RESOURCES_PATH; ?>js/jquery.validate.min.js"></script>

        <script src="<?php echo RESOURCES_PATH; ?>js/scripts.js"></script>
        


        <!--<div id="myModalAddSolicitante" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Registro Solicitante</h3>
            </div>
            <div class="modal-body">
                <p id="contentDemoSol">One fine body…</p>
            </div>
        </div>-->

        <div id="myModalError" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Registro Difunto</h3>
            </div>
            <div class="modal-body">
                <p id="contentDemoM">One fine body…</p>
            </div>
        </div>

        

    </body>
    <!-- END BODY -->
</html>

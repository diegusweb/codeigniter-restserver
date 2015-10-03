<!DOCTYPE html>
<html ng-app="FinalApp">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Freelancer - Start Bootstrap Theme</title>

        <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->


        <!-- Custom CSS -->
        <link href="<?php echo INIT_HOME ?>css/freelancer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo INIT_HOME ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo INIT_HOME ?>css/bootstrap-select.min.css">
        <script> var sessionid = "<?php echo $this->session->userdata('session') ?>";</script>
        <script> var base_url = "<?php echo base_url(); ?>";</script>
        <style>
            .navbar-inverse{
                background-image: linear-gradient(to bottom, #005f86 0%, #005071 100%);
                box-shadow: 1px 3px 5px 0 rgba(0, 0, 0, 0.18);
                margin-bottom: 0;

            }
            .navbar-brand {
                padding: 0px;
            }
            .navbar-inverse .navbar-brand {
                color: #fff;
            }
            .navbar-inverse .navbar-nav > li > a {
                /*color: #9d9d9d;*/
                color: #fff;
            }
            .navbar .navbar-nav {
                letter-spacing: 0px;
            }

        </style>
    </head>

    <body id="page-top" class="index" style="background-color: #eceff1;">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><div style="float: left;"><img class="img-responsive" src="<?php echo INIT_HOME ?>img/profile_min.png" width="50" alt=""></div><div style="float: right; padding-top: 15px;"> OnlyQuiz</div> </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="display:<?php echo (!$this->session->userdata('id_users')) ? "block" : "none" ?>">
                        <li><a href="<?php echo base_url() . "h/sign_up" ?>">Regsitro</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Entrar<strong class="caret"></strong></a>
                            <div class="dropdown-menu" style="padding: 15px 15px 15px;  width: 300px;">

                                <form class="form-horizontal" style="text-transform: none;" id="sing-form" action="<?php echo base_url() . "h/verify" ?>" method="POST" accept-charset="UTF-8">
									 <div class="valid-g has-feedback" style="margin-bottom: 15px;">
									<label>Email</label>
										<input type="text" class="form-control" id="email" name="email" placeholder="Email">
									</div>
									
									 <div class="valid-g has-feedback" style="margin-bottom: 15px;">
									<label>Contraseña</label>
										<input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
									</div>
									
               
                                    <a href="h/forget" class="string"> Olvido su contaseña?</a>
<br><br>
                                    <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="submit" value="Entrar" />
                                </form>
                            </div>
                        </li>  
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="display:<?php echo (!$this->session->userdata('id_users')) ? "none" : "block" ?>">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $this->session->userdata('username') ?>  <b class="caret"></b></a>
                            <ul class="dropdown-menu" style="text-transform: none;">
                                <li><a href="<?php echo base_url() . "h/dashboard" ?>"><i class="icon-search"></i> Dashoard</a></li>
								<li><a href="<?php echo base_url() . "h/account" ?>"><i class="icon-search"></i> Configuracion</a></li>
<!--                                <li><a href="#"><i class="icon-search"></i> Another action</a></li>
                                <li><a href="#"><i class="icon-search"></i> Settings</a></li>-->
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() . "h/logout" ?>"><i class="icon-search"></i> Salir</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <!--                    <li class="page-scroll">
                                                <a href="#portfolio">Portfolio</a>
                                            </li>-->
                        <li class="page-scroll">
                            <a href="#about">About</a>
                        </li>
                        <!--                    <li class="page-scroll">
                                                <a href="#contact">Contact</a>
                                            </li>-->
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <?php echo $content_for_layout ?>

        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                       <!--<div class="footer-col col-md-4">
                            <h3>Location</h3>
                            <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                        </div>-->
                        <div class="footer-col col-md-6">
                            <h3>En la Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="javascript:void(0)" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-6">
                            <h3>Acerca de OnlyQuiz</h3>
                            <p>Aplicacion para practicar tests y simular examenes con un entorno amigable y facil de usar.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; Your Website 2015
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll visible-xs visible-sm">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>

    
       

        <!-- jQuery -->
        <script src="<?php echo INIT_HOME ?>js/jquery.min.js"></script>
        <script src="https://code.angularjs.org/1.3.15/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.3.15/angular-resource.min.js" type="text/javascript"></script>


        <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.js"></script>
       
        
<!--<script src="<?php echo INIT_HOME ?>js/jquery.tablesorter.js"></script>-->


        <script src="<?php echo INIT_PATH; ?>app.js"></script>
        <script src="<?php echo INIT_PATH; ?>directives/directives.js"></script>
        <script src="<?php echo INIT_PATH; ?>controllers/controllers.js"></script>
        <script src="<?php echo INIT_PATH; ?>services/services.js"></script>
        <script src="<?php echo INIT_PATH; ?>filters/filters.js"></script>
       

        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="<?php echo INIT_HOME ?>js/moment-with-locales.js"></script>
        <script src="<?php echo INIT_HOME ?>js/bootstrap-datetimepicker.js"></script>

        <!-- Plugin JavaScript -->
        <script src="<?php echo INIT_HOME ?>js/jquery.easing.min.js"></script>
        <script src="<?php echo INIT_HOME ?>js/classie.js"></script>
        <script src="<?php echo INIT_HOME ?>js/cbpAnimatedHeader.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo INIT_HOME ?>js/freelancer.js"></script>

        <script src="<?php echo INIT_HOME ?>js/jquery.tablesorter.js"></script>
        <script src="<?php echo INIT_HOME ?>js/tables.js"></script>
        
        <link rel="stylesheet" href="<?php echo INIT_HOME ?>js/jquery.realperson.css">
        <script src="<?php echo INIT_HOME ?>js/jquery.plugin.min.js"></script>
        <script src="<?php echo INIT_HOME ?>js/jquery.realperson.min.js"></script>
		<script src="<?php echo INIT_HOME ?>js/bootstrap-select.min.js"></script>

        <script type="text/javascript">
            
            
            $(window).load(function() {
                $('#modal-background').hide();
            });
			
			$('.selectpicker').selectpicker();
        </script>
         <!-- Page Specific Plugins -->
<script type="text/javascript" src="<?php echo RESOURCES_PATH; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo INIT_HOME; ?>js/validationform.js"></script>

        <div id="myModalformas" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Formas de Pago</h4>
                    </div>
                    <div class="modal-body">
                        <p><strong>
                                <img src="https://avancehost.com/wp-content/uploads/2013/03/bcp.png"/>
                                Banco de Credito
                                <br>
                            </strong></p>
                        <p class="text-warning"><small>Cta. en Bs. : No.: 201-50409226-3-91 (Dep. t/c 7.00)<br>
                                Cta. en Dolares : No.: 201-50279233-2-85</small></p>
                        <br>
                        <p><strong>
                                <img src="https://avancehost.com/wp-content/uploads/2013/03/bms.png"/>
                                Banco Mercantil Santa Cruz
                                <br>
                            </strong></p>
                        <p class="text-warning"><small>Cta. en Bs. : No.: 201-50409226-3-91 (Dep. t/c 7.00)<br>
                                Cta. en Dolares : No.: 201-50279233-2-85</small></p>
                        <br>
                        <p><strong>
                                <img src="https://avancehost.com/wp-content/uploads/2013/03/tigo-money.jpg"/>
                                Tigo Money
                                <br>
                            </strong></p>
                        <p class="text-warning"><small>----</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="evaluacionTest" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Adquiere tu Cuenta Completa</h4>
                    </div>
                    <div class="modal-body">
     
                        <p class="text-warning" style="text-align: center">Es Funcionalidad esta incluida en cualquier de los 2 Planes.</p>
                        <br>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
                    </div>
                </div>
            </div>
        </div>
		
		<div id="myModalTerminos" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Terminos y Condiciones</h4>
                    </div>
                    <div class="modal-body">
     
                        <p class="text-warning" style="text-align: center">Es Funcionalidad esta incluida en cualquier de los 2 Planes.</p>
                        <br>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerar</button>
                    </div>
                </div>
            </div>
        </div>

        
    </body>

</html>

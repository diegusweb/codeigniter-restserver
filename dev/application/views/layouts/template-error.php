<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Data Tables</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="<?php echo RESOURCES_PATH; ?>css/style.css" rel="stylesheet" />
        <link href="<?php echo RESOURCES_PATH; ?>css/style_responsive.css" rel="stylesheet" />

		<style>
		#main-content {
			margin-left: 0px;
			padding-right: 0px;
			margin-top: -63px !important;
		}
		</style>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">

        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">

            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->
            <div id="main-content">
                <br>
                <?php echo $content_for_layout ?>
            </div>
   </div>

    </body>
    <!-- END BODY -->
</html>

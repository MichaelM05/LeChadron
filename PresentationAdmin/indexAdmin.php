<?php
if (@session_start() == false) {
    session_start();
    if (!isset($_SESSION["userName"])) {
        header('location: ./login.php');
    }
} else {
    if (!isset($_SESSION["userName"])) {
        header('location: ./login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le Chaudron</title>

        <!-- Bootstrap -->
        <link href="../StyleAdmin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../StyleAdmin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../StyleAdmin/vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <?php include './reusableMenu.php'; ?>
                <!-- /top navigation -->
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">                       

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Le Chaudron<small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>                                         
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="bs-docs-section">
                                            <h1 id="glyphicons" class="page-header">Módulo administrativo</h1>
                                            <div class="bs-glyphicons">
                                                <ul class="bs-glyphicons-list">

                                                    <li>
                                                        <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                                        <span class="glyphicon-class">Información general</span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Le Chaudron
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="../StyleAdmin/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../StyleAdmin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../StyleAdmin/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../StyleAdmin/vendors/nprogress/nprogress.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../StyleAdmin/build/js/custom.min.js"></script>
    </body>
</html>
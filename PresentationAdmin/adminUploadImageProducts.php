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
        <link rel="icon" href="../Resources/logo.PNG" type="image/x-icon">
        <title>Café Aromas</title>

        <!-- Bootstrap -->
        <link href="../StyleAdmin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../StyleAdmin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../StyleAdmin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Dropzone.js -->
        <link href="../StyleAdmin/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <?php
        include './reusableMenu.php';
        include_once '../BusinessAdmin/ProductBusiness.php';
        $productBusiness = new ProductBusiness();
        $result = $productBusiness->getAllTBProduct();
        ?> 
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Café Aromas</h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Agregar imágenes productos</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>            

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p>Arrastre varios archivos al cuadro de abajo para cargar múltiples o haga 
                                    clic para seleccionar archivos.<span>Los archivos se cargarán automáticamente</span></p>
                                <form method="POST" action="../BusinessAdmin/NewImagesProducts.php" class="dropzone">
                                    <label>Producto:</label>                                    
                                    <select name="idProduct" class="form-control">
                                        <option value="0">-Seleccione-</option>
                                        <?php
                                        foreach ($result as $currentProduct) {
                                            ?>
                                            <option value="<?php echo $currentProduct->getIdProduct(); ?>"><?php echo $currentProduct->getNameProduct(); ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </form>
                                <br />
                                <br />
                                <br />
                                <br />
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
                Café Aromas
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
<!-- Dropzone.js -->
<script src="../StyleAdmin/vendors/dropzone/dist/min/dropzone.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../StyleAdmin/build/js/custom.min.js"></script>
</body>
</html>
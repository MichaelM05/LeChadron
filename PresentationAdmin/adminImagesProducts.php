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
        <title>Le Chaudron</title>

        <!-- Bootstrap -->
        <link href="../StyleAdmin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../StyleAdmin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../StyleAdmin/vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
        <script src="../StyleAdmin/js/AjaxFuction/DeleteImage.js" type="text/javascript"></script>
    </head>

    <body class="nav-md">
        <?php
        include './reusableMenu.php';
        include_once '../BusinessAdmin/ImageProductBusiness.php';
        $idProduct = $_GET["id"];
        $imageProduct = new ImageProductBusiness();
        $result = $imageProduct->getImageByProduct($idProduct);
        ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3> Imágenes productos</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Administar <small> imágenes </small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a style="background: #ffffff;" href="adminUploadImageProducts.php" class="btn btn-large btn-block">Agregar Imágenes</a>
                                    </li>
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>                                           
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">                    
                                <div class="row">
                                    <?php
                                    foreach ($result as $currentImage) {
                                        ?>
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; display: block;" src="../Resources/ImagesProducts/<?php echo $currentImage->getPathImageProduct(); ?>" alt="image" />
                                                    <div class="mask">                                                        
                                                        <div class="tools tools-bottom">                                                            
                                                            <button style="background: #000;" onclick="deleteImageProduct('<?php echo $currentImage->getIdImageProduct(); ?>', '<?php echo $currentImage->getPathImageProduct(); ?>')"><i class="fa fa-trash-o"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Imagen producto</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    if (sizeof($result) <= 0) {
                                        ?>
                                        <h1>No hay imágenes para este producto</h1>
                                        <a class="btn btn-default" href="adminUploadImageProducts.php">Agregar</a>
                                        <?php
                                    }
                                    ?>
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
<!-- Modal
            ============================================= -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
        </div>

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

<script>
                                                                function  deleteImageProduct(id, path) {
                                                                    var deleteImage = {
                                                                        "id": id,
                                                                        "path": path,
                                                                        "deleteImage": "delete"

                                                                    };
                                                                    $.ajax({
                                                                        data: deleteImage,
                                                                        url: '../BusinessAdmin/ProductAction.php',
                                                                        type: 'post',
                                                                        beforeSend: function () {

                                                                        },
                                                                        success: function (response) {
                                                                            location.reload();
                                                                        },
                                                                        error: function () {
                                                                            location.reload();
                                                                        }
                                                                    });
                                                                }

</script>


</body>
</html>


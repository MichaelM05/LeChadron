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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>

    <body class="nav-md">
        <?php
        include './reusableMenu.php';
        include_once '../BusinessAdmin/ValidatePHP.php';
        include_once '../BusinessAdmin/CheeseTypeBusiness.php';
        include_once '../BusinessAdmin/CreamTypeBusiness.php';
        $cheeseTypeBusiness = new CheeseTypeBusiness();
        $resultCheese = $cheeseTypeBusiness->getAllTBCheeseType();
        $creamTypeBusiness = new CreamTypeBusiness();
        $resultCream = $creamTypeBusiness->getAllTBCreamType();
        ?>               
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
                                    <h1 id="glyphicons" class="page-header">Agregar producto</h1>
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <form id="frmInformation" method="POST" action="../BusinessAdmin/ProductAction.php" enctype="multipart/form-data">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Producto</a>
                                                </li>                                               
                                                <li role="presentation" class=""><input style="background: #ffffff;" type="submit" class="btn btn-large btn-block" value="Agregar"/>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                    <div>
                                                        <label>Nombre:</label>
                                                        <input class="form-control" type="text" id="txtNameProduct" name="txtNameProduct">
                                                    </div>                                                
                                                    <div>
                                                        <label>Descripción:</label>
                                                        <textarea id="txtDescription" name="txtDescription" class="form-control" rows="8" ></textarea>                                                    
                                                    </div>
                                                    <div>
                                                        <lable>Tipo de queso</lable>
                                                        <select id="cheeseType" name="cheeseType" class="form-control">
                                                            <?php
                                                            foreach ($resultCheese as $currentType) {
                                                                ?>
                                                                <option value="<?php echo $currentType->getIdCheeseType(); ?>"><?php echo $currentType->getCheeseType(); ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <lable>Tipo de crema</lable>
                                                        <select id="creamType" name="creamType" class="form-control">
                                                            <?php
                                                            foreach ($resultCream as $currentCream) {
                                                                ?>
                                                                <option value="<?php echo $currentCream->getIdCreamType(); ?>"><?php echo $currentCream->getCreamType(); ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" id="create" name="create" value="create"/>
                                                </div>

                                            </div>
                                        </form>
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
    function modalSelect(modalMessage, modalTitle) {
        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
        document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
    }
</script>
</body>
</html>

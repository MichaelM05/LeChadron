<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META TAG -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <!-- WEBSITE TITLE -->
        <title>Le chaudron</title>

        <!-- FAVICON -->
        <link rel="icon" href="StyleMain/images/favicon.png">
        <link rel="icon" href="StyleMain/images/favicon.png" sizes="57x57">
        <link rel="icon" href="StyleMain/images/favicon.png" sizes="72x72">
        <link rel="icon" href="StyleMain/images/favicon.png" sizes="114x114">
        <link rel="icon" href="StyleMain/images/favicon.png" sizes="144x144">

        <!--YOUR STYLE -->
        <link rel="stylesheet" href="StyleMain/css/style.css">

        <!-- SKINS THEME -->
        <link href="#" rel="stylesheet" media="screen" class="skin">
        <!-- Example -->
        <!--<link href="StyleMain/css/skin/blue.css" rel="stylesheet" media="screen" class="skin">  -->

        <!--[if lt IE 9]>
            <script src="StyleMain/js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        <?php
        include_once './Business/InstancesIndex.php';
        $product = $productBusiness->getProductById($_GET['id']);
        ?>
    </head>
    <body>

        <div id="preloader">
            <div id="loader-wrapper">
                <div class="cssload-loader">Le <span>chau</span>dron</div>
            </div>
        </div>

        <div class="wrapper">
            <!-- Start Navigation -->
            <nav class="navigation-section navbar navbar-default bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">                        
                        <a class="navbar-brand" href="index.php"><?php echo $organization[0]->getNameOrganization(); ?></a>
                        <div id="google_translate_element" style="margin-top: 53px;"></div><script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                            }
                        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>

                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right" id="top-menu">
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="index.php#about">Nosotros</a></li>
                            <li><a href="index.php#menu">Productos</a></li>
                            <li><a href="index.php#review">Reconocimientos</a></li>                       
                            <li><a href="index.php#fair">Puntos de venta</a></li>
                            <li><a href="index.php#excursion">Tour</a></li>
                            <li><a href="index.php#contact">Contacto</a></li>
                            <li></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- End Navigation -->
            <div class="section about-section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1><?php echo $product->getNameProduct(); ?></h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>                               
                            </span>                                                   
                        </div><!-- end about caption -->
                        <div class="col-md-4">
                            <div class="about-content">                                
                                <h3>Descripción:</h3>
                                <p><?php echo $product->getDescriptionProduct(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-content">                                
                                <h3>Tipo Queso:</h3>
                                <p><?php echo $product->getCheeseType(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-content">                                
                                <h3>Tipo Crema</h3>
                                <p><?php echo $product->getCreamType(); ?></p>
                            </div>
                        </div>
                    </div>   
                </div><!-- end of /.container -->
            </div>
            <br><br>
            <div class="section testimonial-box"  id="review">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Imágenes del producto</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="carousel">
                                <!-- Wrapper for slides -->
                                <div id="testimonial-carousel" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <img src="StyleMain/images/slider/1.jpg" width="530" height="330">
                                    </div><!-- end of /.staf item-->
                                    <div class="item">
                                        <img src="StyleMain/images/slider/1.jpg" width="530" height="330">
                                    </div><!-- end of /.staf item-->
                                    <div class="item">
                                        <img src="StyleMain/images/slider/1.jpg" width="530" height="330">
                                    </div><!-- end of /.staf item-->
                                </div><!-- end of /.staf slider container -->
                            </div><!-- end of /.staf slider -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 social-item">
                            <div class="top-btn">
                                <a class="top-button " href="#" id="easy-top" >
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="footer-social-box">
                                <ul>
                                    <li><a href="<?php echo $socialRed[0]->getUrlSocialRed(); ?>"><i class="fa fa-facebook"></i></a></li>                                    
                                </ul>
                            </div><!-- end of /.footer social media-->
                        </div><!-- end of /. column 12 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 copyright">
                            <p><?php echo $organization[0]->getNameOrganization(); ?></p>
                            <button style="color: #000;" onclick="return modalSelectDevelo('Michael Meléndez Mesén',
                                        'Joseph Cordero Marín');
                                    "type="button" class="btn btn-main"
                                    data-toggle="modal" data-target="#myModal2">
                                TCU 563 Universidad de Costa Rica <br> Sede del Atlántico</button>
                        </div><!-- end column -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </div><!-- end of /.footer section -->
        </div><!-- END OF /. WRAPPER -->
        <!--Modal desarrolladores-->
        <div class="modal fade" id="myModal2" role="dialog" style="margin-top: 200px;">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title">Desarrolladores:</h4>
                    </div>
                    <div class="modal-body bg-dark">
                        <ul>
                            <li><a style="color: #000;" class="Desa1" href="https://www.facebook.com/michael.melendezm?fref=grp_mmbr_list"></a></li>
                            <li><a style="color: #000;" class="Desa2" href="https://www.facebook.com/joseph.cordero.94?fref=grp_mmbr_list"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- JQUERY -->
        <script src="StyleMain/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- BOOTSTRAP -->
        <script src="StyleMain/js/vendor/bootstrap.min.js"></script>
        <!-- PRETTYPHOTO -->
        <script src="StyleMain/js/jquery.prettyPhoto.js"></script>
        <!-- OWL -->
        <script src="StyleMain/js/owl.carousel.min.js"></script>
        <!-- ISOTOPE -->
        <script src="StyleMain/js/isotope.pkgd.min.js"></script>
        <!-- PLACEHOLDEM -->
        <script src="StyleMain/js/placeholdem.min.js"></script>
        <!-- PARALLAX -->
        <script src="StyleMain/js/jquery.parallax-1.1.3.js"></script>
        <!-- COUNTER UP -->
        <script src="StyleMain/js/jquery.counterup.min.js"></script>
        <!-- WAYPOINTS -->
        <script src="StyleMain/js/waypoints.min.js"></script>
        <!-- SMOTHSCROLL -->
        <script src="StyleMain/js/smoothscroll.min.js"></script>
        <!-- BOOTSNAV -->
        <script src="StyleMain/js/bootsnav.js"></script>
        <!-- GOOGLE MAP -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
        <!-- AJAXCHIMP JS -->
        <script src="StyleMain/js/jquery.ajaxchimp.min.js"></script>
        <!-- CUSTOM JS -->
        <script src="StyleMain/js/custom.js"></script>
        <!-- MAP -->
        <script src="StyleMain/js/map.js"></script>
        <script>
            function modalSelect(modalMessage, modalTitle) {
                document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
                document.getElementsByClassName("text")[0].textContent = modalMessage;
            }
            function modalSelectDevelo(name1, name2) {
                document.getElementsByClassName("Desa1")[0].textContent = name1;
                document.getElementsByClassName("Desa2")[0].textContent = name2;
            }
        </script> 
    </body>

</html>



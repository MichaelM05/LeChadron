<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META TAG -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
          <link rel="icon" href="Resources/logo.PNG" type="image/x-icon">
        <!-- WEBSITE TITLE -->
        <title>Le chaudron</title>

     

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
        include_once 'Business/InstancesIndex.php';
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
                            <li class="active"><a href="#home">Inicio</a></li>
                            <li><a href="#about">Nosotros</a></li>
                            <li><a href="#menu">Productos</a></li>
                            <li><a href="#review">Reconocimientos</a></li>                       
                            <li><a href="#fair">Puntos de venta</a></li>
                            <li><a href="#excursion">Tour</a></li>
                            <li><a href="#contact">Contacto</a></li>
                            <li></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- End Navigation -->

            <div class="slider-section" id="home">
                <!-- START MAIN CONTAINER -->
                <div id="home-slider" class="owl-carousel" style=" display:block;">
                    <?php
                    $flag = 0;
                    foreach ($imagesIndex as $currentImage) {
                        if ($flag == 0) {
                            ?>
                            <div class="item">
                                <div class="slider-items" style="background-image: url(StyleMain/images/slider/<?php echo $currentImage->getImageGallery(); ?>)">
                                    <div class="slide-item">
                                        <div class="slider-item">
                                            <h2><span><?php echo $organization[0]->getNameOrganization(); ?></span></h2>
                                            <span class="slider-divider"></span>
                                            <p><?php
                                                $contBI = strlen($organization[0]->getBasicInformation());
                                                $partBI = $contBI / 2;
                                                echo substr($organization[0]->getBasicInformation(), 0, $partBI) . '<br>' .
                                                substr($organization[0]->getBasicInformation(), $partBI, $contBI);
                                                ?></p>
                                        </div><!-- end of /.slider acption -->
                                    </div>
                                </div>
                            </div>
                            <?php
                            $flag = 1;
                        } else {
                            ?>
                            <div class="item">
                                <div class="slider-items" style="background-image: url(StyleMain/images/slider/<?php echo $currentImage->getImageGallery(); ?>)">                           
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="home-navigation">
                    <a class="btn vojon-btn home-next"><i class="fa fa-angle-left"></i></a>
                    <a class="btn vojon-btn home-prev"><i class="fa fa-angle-right"></i></a>
                </div><!-- END OF /. OWL CONTROLAR -->
            </div><!-- END OF /. MAIN CONTAINER -->

            <div class="section about-section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>Historia</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>                               
                            </span>                                                   
                        </div><!-- end about caption -->
                        <div class="row">

                            <?php
                            $cont = strlen($organization[0]->getHistory());
                            $part = $cont / 3;
                            ?>
                            <div class="col-md-4">
                                <div class="about-content">                                
                                    <p><?php echo substr($organization[0]->getHistory(), 0, $part); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-content">                                
                                    <p><?php echo substr($organization[0]->getHistory(), $part, $part); ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-content">                                
                                    <p><?php echo substr($organization[0]->getHistory(), $part * 2, $part); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div><!-- end of /.container -->
            </div><!-- end of /.about section -->

            <div class="section menu-section" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Nuestros productos</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <ul class="filter-nav">
                            <li class="button active milestone-counter" data-category="all">Todos</li>
                            <?php
                            foreach ($cheseeType as $currentType) {
                                ?>
                                <li class="button milestone-counter" data-category="<?php echo str_replace(' ', '', $currentType->getCheeseType()); ?>"><?php echo $currentType->getCheeseType(); ?></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="menu gallery">
                            <?php
                            foreach ($product as $currentProduct) {
                                ?>
                                <div class="menu-items col-sm-3 <?php echo str_replace(' ', '', $currentProduct->getCheeseType()); ?>" data-category="transition">
                                    <a href="./ProductDetail.php?id=<?php echo $currentProduct->getIdProduct(); ?>">
                                        <?php 
                                            $images = $imagesProductBusiness->getImageByProduct($currentProduct->getIdProduct());
                                        ?>
                                        <img src="./Resources/ImagesProducts/<?php echo $images[0]->getPathImageProduct(); ?>" style="width: 300px; height: 270px;" alt="">
                                        <div class="menu-item">
                                            <h2><?php echo $currentProduct->getNameProduct(); ?></h2> 
                                            <h4><?php echo $currentProduct->getCreamType(); ?> - 
                                                <?php echo $currentProduct->getCheeseType(); ?></h4>
                                        </div>                                                                               
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>                       
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.menu section -->

            <div class="section testimonial-box"  id="review">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Reconocimientos</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="carousel">
                                <!-- Wrapper for slides -->
                                <div id="testimonial-carousel" class="owl-carousel owl-theme">

                                    <?php
                                    foreach ($recognition as $currentRecognition) {
                                        ?>
                                        <div class="item">
                                            <img src="Resources/ImagesRecognition/<?php echo $currentRecognition->getImageRecognition(); ?>" width="200" height="200" alt="">
                                            <div class="testimonial-caption">  
                                                <h4> <?php echo $currentRecognition->getNameRecognition() ?></h4>
                                                <p> <?php echo $currentRecognition->getDescriptionRecognition(); ?></p><!-- staf caption -->
                                            </div><!-- end of /.staf caption box -->
                                        </div><!-- end of /.staf item-->
                                        <?php
                                    }
                                    ?>
                                </div><!-- end of /.staf slider container -->
                            </div><!-- end of /.staf slider -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="section team-section" id="fair">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>Puntos de venta</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Nuestros productos están disponibles en los siguientes puntos
                                de venta:</p>
                        </div><!-- end about caption -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <?php
                        foreach ($salesTrade as $currentSale) {
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="about-profile">
                                    <div class="best-service-img">
                                        <img src="StyleMain/images/salesTrade/<?php echo $currentSale->getImagePathSalesTrade(); ?>"
                                             width="270" height="270" alt="">
                                    </div>
                                    <div class="profile-details">
                                        <h2><?php echo $currentSale->getNameSalesTrade(); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php
                        foreach ($salesFair as $currentFair) {
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="best-service text-center">
                                    <div class="best-service-img">
                                        <img src="StyleMain/images/salesFair/<?php echo $currentFair->getImageSalesFair(); ?>"
                                             width="270" height="270" alt="">
                                    </div>
                                    <h4><?php echo $currentFair->getNameSalesFair(); ?></h4>
                                    <p>
                                        <?php echo $currentFair->getLocationSalesFair(); ?>
                                    </p>
                                    <p>
                                        <?php echo $currentFair->getHorarySalesFair(); ?>
                                    </p>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div><!-- end .row -->
                </div><!-- end of /.container -->
            </div><!-- end of /.about section -->

            <div class="section about2-section" id="excursion">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>Tour</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>                               
                            </span>
                        </div><!-- end about caption -->
                        <div class="row">
                            <div class="col-md-offset-1">
                                <div class="about-content">                                
                                    <p><?php echo $excursion[0]->getDescriptionExcursion(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <form class="reservation-form row" id="reservation-form" action="Business/ExcursionAction.php" name="" method="post">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" required="required" >
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Teléfono" required="required">
                                        <i class="fa fa-phone"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required="required">
                                        <i class="fa fa-envelope-o"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="numberPerson18" name="numberPerson18" placeholder="Personas +18" required="required">
                                        <i class="fa fa-user"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="numberPerson12" name="numberPerson12" placeholder="Personas -12" required="required">
                                        <i class="fa fa-user"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="DATE" required="required">
                                        <i class="fa fa-calendar-o"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control" id="pay" name="pay" placeholder="Forma pago" required="required">
                                            <option>Efectivo</option>
                                            <option>Tarjeta de crédito</option>
                                            <option>Transferencia bancaria</option>

                                        </select>
                                        <i class="fa fa-clock-o"></i>
                                    </div> 
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea style="height: 100px;" name="comments" class="form-control" id="comments" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="vojon-btn" id="res-submit" >Reservar</button>
                                </div>
                            </form>                            
                        </div> 
                    </div><!-- end of /.container -->
                </div><!-- end of /.about section -->
                <div class="section contact-section" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="section-title-box col-md-6 col-md-offset-3">
                                <h1>Contacto</h1><!-- title -->
                                <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                                <p>Para cualquier consulta escríbanos, nos gustaría saber de tí y
                                    de tus opiniones sobre <br><?php echo $organization[0]->getNameOrganization(); ?></p>
                            </div><!-- end of /.section title box -->
                        </div><!-- end of /.row -->
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 address-box">
                                <div class="row col-md-offset-2">                                
                                    <div class="col-sm-4">
                                        <div class="contact-items">
                                            <i class="fa fa-phone"></i>
                                            <?php
                                            foreach ($phone as $currentPhone) {
                                                ?>
                                                <span>+506 <?php echo $currentPhone->getPhone(); ?></span>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="contact-items">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <?php
                                            foreach ($email as $currentEmail) {
                                                ?>
                                                <span><?php echo $currentEmail->getEmail(); ?></span>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- end of /.address box -->
                        </div><!-- end of /.row -->
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 contact-box">
                                <form action="Business/SmtpAction.php"  method="POST"  class="row" id="contact-form" >
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre completo" required="true">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="teléfono" required="true">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required="true">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <textarea name="comments" class="form-control" id="comments" placeholder="Mensaje" required="true"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <input style="color: #fff;" type="submit" class="vojon-btn message-btn contact-submit" id="submit" value="Enviar" />
                                    </div>
                                </form><!-- end form -->
                                <div id="message"></div>

                            </div><!-- end of /.column anf contact -->
                        </div>
                    </div><!-- end of /.container -->
                </div><!-- end of /.contact section -->


                <div id="map"></div><!-- end of /.map -->

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
                                <p><a href="PresentationAdmin/login.php"><?php echo $organization[0]->getNameOrganization(); ?></a></p>
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
            <div class="modal fade" id="myModal2" role="dialog" style="margin-top: 220px;">
                <div class="modal-dialog">    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Desarrolladores:</h4>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li><a class="Desa1" href="https://www.facebook.com/michael.melendezm?fref=grp_mmbr_list"></a></li>
                                <li><a  class="Desa2" href="https://www.facebook.com/joseph.cordero.94?fref=grp_mmbr_list"></a></li>
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

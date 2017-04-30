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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><?php echo $organization[0]->getNameOrganization(); ?></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right" id="top-menu">
                            <li class="active"><a href="#home">Inicio</a></li>
                            <li><a href="#about">Acerca de</a></li>
                            <li><a href="#menu">Productos</a></li>
                            <li><a href="#review">Reconocimientos</a></li>                       
                            <li><a href="#fair">Ferias</a></li>
                            <li><a href="#excursion">Excursión</a></li>
                            <li><a href="#contact">Contacto</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- End Navigation -->

            <div class="slider-section" id="home">
                <!-- START MAIN CONTAINER -->
                <div id="home-slider" class="owl-carousel" style=" display:block;">
                    <div class="item">
                        <div class="slider-items" style="background-image: url(StyleMain/images/slider/1.jpg)">
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
                    <div class="item">
                        <div class="slider-items" style="background-image: url(StyleMain/images/slider/2.jpg)">                           
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-items" style="background-image: url(StyleMain/images/slider/3.jpg)">                           
                        </div>
                    </div>
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

            <div id="services" class="section service-section">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Nosotros</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                        </div><!-- end about caption -->
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="best-service text-center">
                                <div class="best-service-img">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                </div>
                                <h4>Misión</h4>
                                <p>
                                    <?php echo $organization[0]->getMission(); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="best-service text-center">
                                <div class="best-service-img">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <h4>Visión</h4>
                                <p>
                                    <?php echo $organization[0]->getVission(); ?>
                                </p>
                            </div>
                        </div>                        
                    </div><!-- end .row -->
                </div><!-- end .container -->
            </div>
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
                                <li class="button milestone-counter" data-category="<?php echo str_replace(' ','',$currentType->getCheeseType()); ?>"><?php echo $currentType->getCheeseType(); ?></li>
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
                                <div class="menu-items col-sm-3 <?php echo str_replace(' ','',$currentProduct->getCheeseType()); ?>" data-category="transition">
                                    <a href="StyleMain/images/menu/menu-1.jpg" data-gal="prettyPhoto[gallery1]">
                                        <img src="StyleMain/images/menu/menu-1.jpg" width="270" height="270" alt="">
                                        <div class="menu-item">
                                            <h2><?php echo $currentProduct->getNameProduct(); ?></h2>
                                            <h3><?php echo $currentProduct->getCreamType(); ?></h3>                                        
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
                            <h1>Recomendaciones</h1><!-- title -->
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
                                            <img src="StyleMain/images/client1.png" width="130" height="130" alt="">
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


            <div class="section team-section" id="team">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>Puntos de venta</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Nuestros productos están disponibles en todas las tiendas de las siguientes cadenas:</p>
                        </div><!-- end about caption -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <?php
                        foreach ($salesTrade as $currentSale) {
                            ?>
                            <div class="col-md-3 col-sm-6 col-md-offset-1">
                                <div class="about-profile">
                                    <img src="StyleMain/images/salesTrade/<?php echo $currentSale->getImagePathSalesTrade(); ?>"
                                         width="270" height="270" alt="">
                                    <div class="profile-details">
                                        <h2><?php echo $currentSale->getNameSalesTrade(); ?></h2>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.about section -->

            <div class="section service-section" id="fair">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Ferias</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Estamos presentes, con la gama completa de nuestros productos, en las siguientes ferias:</p>
                        </div><!-- end about caption -->
                    </div>
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
                </div><!-- end .container -->
            </div>
            <div class="section about-section" id="excursion">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>Excursión</h1>
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

                            <form class="reservation-form row" id="reservation-form" action="" name="" method="post">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Nombre completo" required="required" >
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputPhoneNumber" name="InputPhoneNumber" placeholder="Teléfono" required="required">
                                        <i class="fa fa-phone"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" placeholder="Correo electrónico" required="required">
                                        <i class="fa fa-envelope-o"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputNumberPerson18" name="InputNumberPerson" placeholder="Personas +18" required="required">
                                        <i class="fa fa-user"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputNumberPerson12" name="InputNumberPerson" placeholder="Personas -12" required="required">
                                        <i class="fa fa-user"></i>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="InputDate" name="InputDate" placeholder="DATE" required="required">
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
                                <form class="row" id="contact-form" action="" name="contactform" method="post" >
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre completo">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Correo electrónico">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <textarea name="comments" class="form-control" id="comments" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="vojon-btn message-btn contact-submit" id="submit">Enviar</button>
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

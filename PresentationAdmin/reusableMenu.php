<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-group"></i> <span>Le Chaudron</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                    </div>
                    <div class="profile_info">
                        <span>Bienvenido: <?php echo $_SESSION['userName'];?></span>
                        <h2></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">                                  
                                    <li><a href="adminInformationBasic.php">Descripción general</a></li>
                                    <li><a href="adminInformationHistory.php">Historia</a></li>
                                    <li><a href="#">Tipos de Queso</a></li>
                                    <li><a href="#">Tipos de Crema</a></li>
                                    <li><a href="adminInformationProducts.php">Productos</a></li>
                                    <li><a href="adminCreateRecognition.php">Reconocimientos</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>                         

                </div>
                <!-- /sidebar menu -->


                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['userName'];?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">                                       
                                <li><a href="../BusinessAdmin/UnloginAction.php"><i class="fa fa-sign-out pull-right"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>                             
                    </ul>
                </nav>
            </div>
        </div>
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
        <!-- Animate.css -->
        <link href="../StyleAdmin/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../StyleAdmin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form id="frmLogin" method="POST" action="../BusinessAdmin/LoginAction.php">
                            <h1>Inicio Sesión</h1>
                            <div>
                                <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Usuario" required="" />
                            </div>
                            <div>
                                <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contraseña" required="" />
                            </div>
                            <div>
                                <input type="submit" class="btn btn-default submit" id="btnAccept" name="btnAccept" value="Iniciar"/>               
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-group"></i>Le Chaudron</h1>
                                    <p>©2017 Le Chaudron</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>

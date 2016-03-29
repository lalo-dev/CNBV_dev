<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 14/03/2016 14:28:41																		  *
	**********************************************************************************************/
	
	if(isset($_POST["login-username"]))
	{
		include "includes/include.php";
	}
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <!-- head -->
    <?php include_once('includes/zlib/head.php'); ?>
    <!-- END head-->
    <body>
        <!-- Login Content -->
        <div class="bg-white pulldown">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- Login Title -->
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="img/various/sfp.png" alt="SFP" style="width: 100%" />
                                    </div>
                                    <div class="col-md-6">
                                        <img src="img/various/cnbv.png" alt="CNBV" style="width: 100%" />
                                    </div>
                                </div>
                            </div>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-login form-horizontal push-30-t" action="index" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" id="login-username" name="login-username">
                                            <label for="login-username">Usuario</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" id="login-password" name="login-password">
                                            <label for="login-password">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Recuerdame
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="base_pages_reminder_v2.html">Se te olvidó la contraseña?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit">Iniciar sesión</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="pulldown push-30-t text-center animated fadeInUp">
            <small class="text-muted"><span class="js-year-copy"></span> &copy; CNBV</small>
        </div>
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php include_once('includes/zlib/oneuiCore.php'); ?>
        <!-- END OneUI Core -->

        <!-- Page JS Plugins -->
        <script src="js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="js/pages/base_pages_login.js"></script>
    </body>
</html>
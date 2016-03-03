<?php
// 	include_once "../../assets/php/class/clsConsultas.php";
// 	include_once "../../assets/php/class/clsTiposPublicaciones.php";
	
	include_once "../../assets/php/ctrls/ctrPublicaciones.php";
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <!-- head -->
    <?php include_once('../../assets/zlib/head.php'); ?>
    <!-- END head-->
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php include_once('../../assets/zlib/sideContent.php'); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?php include_once('../../assets/zlib/menu.php'); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php include_once('../../assets/zlib/headerNavigation.php'); ?>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <?php include_once('../../assets/zlib/headerNavigation.php'); ?>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <?php include_once('../../assets/zlib/pageHeader.php'); ?>
                <!-- END Page Header -->

                <!-- Stats -->
                <?php include_once('../../assets/zlib/stats.php'); ?>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- News -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"> Blog</h3>
                                </div>
                                <div class="block-content">
                                    <ul class="list list-timeline pull-t">
                                    
                                    
                                    
                                    
                                        <!-- Twitter Notification -->
<?php
									foreach($publicaciones as $unaP)
									{
?>
                                        <li>
                                            <div class="list-timeline-time"><?php echo $unaP["fechaCreacionPublicaciones"]?></div>
                                            <i class="fa fa-newspaper-o list-timeline-icon bg-info"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600"><?php echo $unaP["tituloPublicaciones"]?></p>
                                                <p class="font-s13"><?php echo $unaP["textoPublicaciones"]?></p>
                                                <div class="row items-push js-gallery">
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="../assets/img/photos/photo2@2x.jpg">
                                                            <img class="img-responsive" src="../assets/img/photos/photo2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="../assets/img/photos/photo8@2x.jpg">
                                                            <img class="img-responsive" src="../assets/img/photos/photo8.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-4">
                                                        <a class="img-link" href="../assets/img/photos/photo16@2x.jpg">
                                                            <img class="img-responsive" src="../assets/img/photos/photo16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p>
                                            </div>
                                        </li>
<?php
                                    }
?>
                                        <!-- END Twitter Notification -->

                                        
                                        
                                        
                                        
                                        
                                        
                                        <!-- Generic Notification -->
<!--                                         <li> -->
<!--                                             <div class="list-timeline-time">10 Enero 2016</div> -->
<!--                                             <i class="fa fa-calendar-times-o list-timeline-icon bg-city"></i> -->
<!--                                             <div class="list-timeline-content"> -->
<!--                                                 <p class="font-w600">Fechas limite de entrega!</p> -->
<!--                                                 <p class="font-s13">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
<!--                                                 <p class="font-s13"><a href="javascript:void(0)">Leer más >></a></p> -->
<!--                                             </div> -->
<!--                                         </li> -->
                                        <!-- END Generic Notification -->
                                    </ul>
                                </div>
                            </div>
                            <!-- END News -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Content Grid -->
                            <div class="content-grid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- Mini Stats -->
                                        <?php include_once('../../assets/zlib/miniStats.php'); ?>
                                        <!-- END Mini Stats -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Content Grid -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include_once('../../assets/zlib/footer.php'); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->


        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php include_once('../../assets/zlib/oneuiCore.php'); ?>
        <!-- END OneUI Core -->

        <!-- Page Plugins -->
        <script src="../../assets/js/plugins/slick/slick.min.js"></script>
        <script src="../../assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });

            $('.mp0').addClass('active');
        </script>
    </body>
</html>
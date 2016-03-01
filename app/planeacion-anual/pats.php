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
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                PATS <small>Listado de PATS cargados en el sistema</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                        <ul class="nav nav-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#search-projects">PATS</a>
                            </li>
                            <li class="pull-right">
                                <a href="#btabs-alt-static-settings" data-toggle="tooltip" title="Opciones"><i class="si si-settings"></i></a>
                            </li>
                            <li class="pull-right">
                                <ul class="block-options push-10-t push-10-r">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="block-content tab-content bg-white">
                            <!-- Projects -->
                            <div class="tab-pane fade fade-up in active" id="search-projects">
                                <div class="border-b push-30">
                                    <h2 class="push-10">1 <span class="h5 font-w400 text-muted">PAT encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;"><i class="fa fa-folder-open-o text-gray"></i> PAT</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Auditorias</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Seguimientos</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> Observaciones</th>
                                            <th class="text-center" style=""><i class="fa fa-file-o text-gray"></i> PRAS</th>
                                            <th class="text-center" style=""><i class="fa fa-warning text-gray"></i> Validar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3 class="h5 font-w600 push-10">
                                                    <a class="link-effect" href="revisiones">Programa Anual de Trabajo 2016</a>
                                                </h3>
                                                <div class="push-10">    
                                                    <span class="label label-primary"><i class="fa fa-check"></i> Programado</span>
                                                </div>
                                            </td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                            <td class="h3 text-center">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Projects -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-lg-2 col-lg-offset-4">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-folder fa-4x text-success"></i>
                                                <div class="font-w600 push-15-t">Nuevo PAT</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include_once('zlib/footer.php'); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->


        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php include_once('zlib/oneuiCore.php'); ?>
        <!-- END OneUI Core -->

        <script>
            $('.mp1').addClass('open');
            $('.ms1_1').addClass('active');
        </script>
    </body>
</html>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <!-- head -->
    <?php include_once('../../../assets/zlib/head.php'); ?>
    <!-- END head-->
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php include_once('../../../assets/zlib/sideContent.php'); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?php include_once('../../../assets/zlib/menu.php'); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php include_once('../../../assets/zlib/headerNavigation.php'); ?>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <?php include_once('../../../assets/zlib/headerNavigationLeft.php'); ?>
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
                                Equipo de trabajo <small>Planeación anual</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li>Equipo de trabajo</li>
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
                                <a href="#search-projects">Revisiones</a>
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
                            <!-- Auditorias -->
                            <div class="tab-pane fade fade-up in active" id="search-projects">
                                <div class="border-b push-30">
                                    <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Revisiones encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">Tipo</th>
                                            <th class="text-left">Instancia</th>
                                            <th class="text-left">Justificación</th>
                                            <th class="text-center">Trimeste</th>
                                            <th class="text-center">Estatus</th>
                                            <th class="text-center">Auditores</th>
                                            <th class="text-center">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Auditoría</td>
                                            <td>OIC</td>
                                            <td>ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">1</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-success">En proceso</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">5</span>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary" type="button" href="editar"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Seguimiento</td>
                                            <td>OIC</td>
                                            <td>CANTIDAD DE OBSERVACIONES Y/O ACCIONES DE MEJORA DE CONTROL INTERNO</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">2</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-warning">Programada</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">5</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Auditorias -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-4">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-paper-plane fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Revisión</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
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
            <?php include_once('../../../assets/zlib/footer.php'); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php include_once('../../../assets/zlib/oneuiCore.php'); ?>
        <!-- END OneUI Core -->

        <!-- Page JS Code -->
        <script>
            $('.mp1').addClass('open');
            $('.ms1_5').addClass('active');
        </script>
    </body>
</html>
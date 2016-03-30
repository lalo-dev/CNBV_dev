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
                                Dinámicos <small>Reportes</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Reportes</li>
                                <li>Dinámicos</li>
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
                                <a href="#search-escolaridad">Reporte</a>
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
                            <!-- Escolaridad -->
                            <div class="tab-pane fade fade-up in active" id="search-escolaridad">
                                <!-- Agregar termino -->
                                <div class="block block-themed">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Generar</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">
                                            <div class="form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="estatus" name="estatus">
                                                            <option></option>
                                                            <option value="1">A</option>
                                                            <option value="2">B</option>
                                                            <option value="3">C</option>
                                                            <option value="4">D</option>
                                                            <option value="5">E</option>
                                                        </select>
                                                        <label for="estatus">Tipo</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" multiple="" id="responsable" name="responsable">
                                                            <option selected></option>
                                                            <option value="1">Campo 1</option>
                                                            <option value="2">Campo 2</option>
                                                            <option value="3">Campo 3</option>
                                                        </select>
                                                        <label for="responsable">Campos</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material">
                                                        <input class="js-datepicker form-control" type="text" id="example-datepicker6" name="example-datepicker6" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                        <label for="example-datepicker6">De:</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material">
                                                        <input class="js-datepicker form-control" type="text" id="example-datepicker6" name="example-datepicker6" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                        <label for="example-datepicker6">A:</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" type="submit">Generar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Limpiar</button>
                                                    <button class="btn btn-sm btn-danger" type="reset">PDF</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar termino -->
                                <hr>
                                <hr>
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Tipo</th>
                                                <th>Campo 1</th>
                                                <th>Campo 2</th>
                                                <th>Campo 3</th>
                                                <th class="text-center">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">A</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">12/12/16</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">A</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">12/12/16</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">A</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">12/12/16</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">A</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">12/12/16</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center">A</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">12/12/16</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Escolaridad -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Main Dashboard Chart -->
                                    <div class="block">
                                        <div class="block-header">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Gráfica</h3>
                                        </div>
                                        <div class="block-content block-content-full bg-gray-lighter text-center">
                                            <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                                            <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                                        </div>
                                        <div class="block-content text-center">
                                            <div class="row items-push text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                                                    <div class="h5 font-w300 text-muted">+ 205 Sales</div>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <div class="push-10"><i class="si si-users fa-2x"></i></div>
                                                    <div class="h5 font-w300 text-muted">+ 25% Clients</div>
                                                </div>
                                                <div class="col-xs-6 col-lg-3 visible-lg">
                                                    <div class="push-10"><i class="si si-star fa-2x"></i></div>
                                                    <div class="h5 font-w300 text-muted">+ 10 Ratings</div>
                                                </div>
                                                <div class="col-xs-6 col-lg-3 visible-lg">
                                                    <div class="push-10"><i class="si si-share fa-2x"></i></div>
                                                    <div class="h5 font-w300 text-muted">+ 35 Followers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Main Dashboard Chart -->
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

        <!-- Page JS Plugins -->
        <script src="../../../assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="../../../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../../assets/js/pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <script src="../../../assets/js/pages/base_forms_validation.js"></script>

        <!-- Page JS Plugins -->
        <script src="../../../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../../assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="../../../assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="../../../assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../../assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="../../../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });

            $('.mp5').addClass('open');
            $('.ms5_2').addClass('active');
        </script>

        <!-- Page Plugins -->
        <script src="../../../assets/js/plugins/slick/slick.min.js"></script>
        <script src="../../../assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../../assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
    </body>
</html>
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
                                Registrar <small>Actividades</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Actividades</li>
                                <li>Registrar</li>
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
                                <a href="#search-info">Info</a>
                            </li>
                            <li>
                                <a href="#search-projects">Registro</a>
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
                            <!-- General -->
                            <div class="tab-pane fade fade-up in active" id="search-info">
                                <div class="border-b push-30">
                                    <h2 class="push-10">Avance <span class="h5 font-w400 text-muted">Actividades</span></h2>
                                </div>
                                <div class="row">
                                    <img src="../../../archivos/grafica.png" alt="">
                                </div>

                                <div class="border-b push-30">
                                    <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a class="block block-link-hover2" href="javascript:void(0)">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">Prueba de ceros</span>
                                                <span class="h4 text-white-op">Semanas hombre</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">Prueba de ceros</span>
                                                <span class="h4 text-white-op">Semanas hombre</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End General -->
                            <!-- Revisiones -->
                            <div class="tab-pane fade fade-up" id="search-projects">
                                <div class="border-b push-30">
                                    <h2 class="push-10">10 <span class="h5 font-w400 text-muted">Actividades relacionadas</span></h2>
                                </div>
                                <div class="block">
                                    <div class="block-content block-content-narrow">
                                        <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-material form-horizontal push-10-t" action="#" method="post">
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="js-datepicker form-control input-sm" type="text" id="example-datepicker4" name="example-datepicker4" data-date-format="mm/dd/yy">
                                                        <label for="example-datepicker4">Fecha</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="val-skill1" name="val-skill1">
                                                            <option></option>
                                                            <option value="pr">Actividad 01</option>
                                                            <option value="ad">Actividad 02</option>
                                                            <option value="ad">Actividad 03</option>
                                                            <option value="ad">Actividad 04</option>
                                                            <option value="ad">Actividad 05</option>
                                                            <option value="ad">Actividad 06</option>
                                                        </select>
                                                        <label for="val-skill1">Actividad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="val-skill1" name="val-skill1">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                        <label for="val-skill1">Tiempo(hrs)</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="val-username2" name="val-username2">
                                                        <label for="val-username2">Especificar actividad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Table Sections (.js-table-sections class is initialized in App() -> uiHelperTableToolsSections()) -->
                                <div class="block">
                                    <div class="block-content">
                                        <table class="js-table-sections table table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 30px;"></th>
                                                    <th>Actividad</th>
                                                    <th>Días naturales</th>
                                                    <th>Semanas-Hombre</th>
                                                    <th>Fecha</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody class="js-table-sections-header open">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">A. Vacantes</td>
                                                    <td>
                                                        <span class="label label-primary">2</span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <em class="text-muted">0.4</em>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 text-success">De XX a XX</td>
                                                    <td>
                                                        <small>1</small>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <small class="text-muted">0.2</small>
                                                    </td>
                                                    <td>12-12-15</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 text-success">De XX a XX</td>
                                                    <td>
                                                        <small>1</small>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <small class="text-muted">0.2</small>
                                                    </td>
                                                    <td>12-12-15</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody class="js-table-sections-header">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">B. Vacaciones</td>
                                                    <td>
                                                        <span class="label label-warning">5</span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <em class="text-muted">1</em>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Table Sections -->
                            </div>
                            <!-- END Revisiones -->
                            <!-- Settings -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-4">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-list fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Ordenar</div>
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
                            <!-- END Settings -->
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
        <script src="../../../assets/js/pages/base_ui_chat.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });

            $('.mp7').addClass('open');
            $('.ms7_1').addClass('active');
        </script>
    </body>
</html>
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
                                Agregar <small>COMSOC</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Otras actividades</li>
                                <li><a class="link-effect" href="../../otras-actividades/comsoc">COMSOC</a></li>
                                <li>Agregar</li>
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
                                <a href="#search-escolaridad">Lista</a>
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
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar</h3>
                                    </div>
                                    <div class="block-content">
                                        <form class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="estatus" name="estatus">
                                                            <option></option>
                                                            <option value="1">Tema 1</option>
                                                            <option value="2">Tema 2</option>
                                                            <option value="3">Tema 3</option>
                                                            <option value="4">Tema 4</option>
                                                            <option value="5">Tema 5</option>
                                                        </select>
                                                        <label for="estatus">Tema</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="nombre" name="nombre">
                                                        <label for="nombre">Tema</label>
                                                        <div class="help-block text-right">Agregar nuevo tema si no existe</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="responsable" name="responsable">
                                                            <option></option>
                                                            <option value="1">Nombre1 Apellido Apellido</option>
                                                            <option value="2">Nombre2 Apellido Apellido</option>
                                                            <option value="3">Nombre3 Apellido Apellido</option>
                                                            <option value="4">Nombre4 Apellido Apellido</option>
                                                            <option value="5">Nombre5 Apellido Apellido</option>
                                                        </select>
                                                        <label for="responsable">Responsable</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <textarea class="form-control input-sm" id="actividades" name="actividades" rows="5"></textarea>
                                                        <label for="actividades">Descripción</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select multiple="" size="5" class="form-control input-sm" id="normativa" name="normativa">
                                                            <option></option>
                                                            <option value="1">Normativa aplicable 01</option>
                                                            <option value="2">Normativa aplicable 02</option>
                                                            <option value="3">Normativa aplicable 03</option>
                                                            <option value="4">Normativa aplicable 04</option>
                                                            <option value="5">Normativa aplicable 05</option>
                                                        </select>
                                                        <label for="normativa">Normativa</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-8">
                                                    <label class="col-xs-12" for="example-file-multiple-input">Archivos adjuntos</label>
                                                    <div class="col-xs-12">
                                                        <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="col-md-8">
                                                        <div class="form-material">
                                                            <input class="js-datepicker form-control" type="text" id="example-datepicker6" name="example-datepicker6" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                            <label for="example-datepicker6">Fecha</label>
                                                        </div>
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
                                <!-- End Agregar termino -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">3 <span class="h5 font-w400 text-muted">Elementos encontrados</span> Tema 1</h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed table-header-bg">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th style="width: 190px;">Responsable</th>
                                                <th>Descripción</th>
                                                <th>Normativa</th>
                                                <th style="width: 170px;">Archivos adjuntos</th>
                                                <th class="text-center" style="width: 90px;">Fecha</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Nombre Apellido Apellido</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                <td>
                                                    <span class="label label-primary">Normativa aaaaa</span>
                                                    <span class="label label-primary">Normativa aaaaa</span>
                                                </td>
                                                <td>
                                                    <a href="">Archivo adjunto.pdf</a>
                                                </td>
                                                <td class="text-center">12-12-2015</td>
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
                                                <td class="text-center">2</td>
                                                <td>Nombre Apellido Apellido</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                <td>
                                                    <span class="label label-primary">Normativa aaaaa</span>
                                                    <span class="label label-primary">Normativa aaaaa</span>
                                                </td>
                                                <td>
                                                    <a href="">Archivo adjunto.pdf</a>
                                                </td>
                                                <td class="text-center">12-12-2015</td>
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
                                                <td class="text-center">3</td>
                                                <td>Nombre Apellido Apellido</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                                <td>
                                                    <span class="label label-primary">Normativa aaaaa</span>
                                                    <span class="label label-primary">Normativa aaaaa</span>
                                                </td>
                                                <td>
                                                    <a href="">Archivo adjunto.pdf</a>
                                                </td>
                                                <td class="text-center">12-12-2015</td>
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
                                    </table>
                                </div>
                                <!-- End Lista -->
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">3 <span class="h5 font-w400 text-muted">Elementos encontrados</span> Tema 2</h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed table-header-bg">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th style="width: 190px;">Responsable</th>
                                            <th>Descripción</th>
                                            <th>Normativa</th>
                                            <th style="width: 170px;">Archivos adjuntos</th>
                                            <th class="text-center" style="width: 90px;">Fecha</th>
                                            <th class="text-center">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Nombre Apellido Apellido</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                            <td>
                                                <span class="label label-primary">Normativa aaaaa</span>
                                                <span class="label label-primary">Normativa aaaaa</span>
                                            </td>
                                            <td>
                                                <a href="">Archivo adjunto.pdf</a>
                                            </td>
                                            <td class="text-center">12-12-2015</td>
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
                                            <td class="text-center">2</td>
                                            <td>Nombre Apellido Apellido</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                            <td>
                                                <span class="label label-primary">Normativa aaaaa</span>
                                                <span class="label label-primary">Normativa aaaaa</span>
                                            </td>
                                            <td>
                                                <a href="">Archivo adjunto.pdf</a>
                                            </td>
                                            <td class="text-center">12-12-2015</td>
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
                                            <td class="text-center">3</td>
                                            <td>Nombre Apellido Apellido</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                                            <td>
                                                <span class="label label-primary">Normativa aaaaa</span>
                                                <span class="label label-primary">Normativa aaaaa</span>
                                            </td>
                                            <td>
                                                <a href="">Archivo adjunto.pdf</a>
                                            </td>
                                            <td class="text-center">12-12-2015</td>
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
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Escolaridad -->
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

            $('.mp9').addClass('open');
            $('.ms9_2').addClass('active');
        </script>
    </body>
</html>
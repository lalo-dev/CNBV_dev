<?php
session_start();

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
                <?php include_once('../../assets/zlib/headerNavigationLeft.php'); ?>
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
                                Agregar revisión <small>PAT <?php echo $_SESSION['patAnio']; ?></small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li><a class="link-effect" href="pat">PAT Completo</a></li>
                                <li><a class="link-effect" href="revisiones">PAT <?php echo $_SESSION['patAnio']; ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Material Forms Validation -->
                            <div class="block">
                                <div class="block-content block-content-narrow">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material form-horizontal push-10-t" action="#" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="val-username2" name="val-username2">
                                                    <label for="val-username2">No. revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill1" name="val-skill1">
                                                        <option></option>
                                                        <option value="pr">Auditoria</option>
                                                        <option value="ad">Seguimiento</option>
                                                    </select>
                                                    <label for="val-skill1">Tipo revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill2" name="val-skill2">
                                                        <option></option>
                                                        <option value="pr">Programada</option>
                                                        <option value="ad">Adicional</option>
                                                    </select>
                                                    <label for="val-skill2">Prog / Adic</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill3" name="val-skill3">
                                                        <option></option>
                                                        <option value="100">100</option>
                                                        <option value="200">200</option>
                                                        <option value="300">300</option>
                                                        <option value="400">400</option>
                                                        <option value="500">500</option>
                                                        <option value="600">600</option>
                                                        <option value="700">700</option>
                                                        <option value="800">800</option>
                                                        <option value="900">900</option>
                                                    </select>
                                                    <label for="val-skill3">Clave</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">OIC</option>
                                                        <option value="otro">Otro</option>
                                                    </select>
                                                    <label for="val-skill4">Instancia</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill5" name="val-skill5">
                                                        <option></option>
                                                        <option value="j1">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</option>
                                                        <option value="j2">CANTIDAD DE OBSERVACIONES Y/O ACCIONES DE MEJORA DE CONTROL INTERNO</option>
                                                        <option value="j3">AREA O RUBRO NO REVISADO CON ANTIGÜEDAD MAYOR A UN AÑO</option>
                                                    </select>
                                                    <label for="val-skill5">Justificación</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill5" name="val-skill5">
                                                        <option></option>
                                                        <option value="a1">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</option>
                                                        <option value="a2">Áreas involucradas (seguimiento)</option>
                                                        <option value="a3">DG de Prevención de Operaciones con Recursos de Procedencia Ilícita A y B (Proceso de Supervisión)</option>
                                                        <option value="a4">DG de Visitas de Investigación (Proceso de Soporte Legal)</option>
                                                        <option value="a5">DG de Normatividad  (Proceso Soporte Legal)</option>
                                                        <option value="a6">DG de Desarrollo Regulatorio (Proceso de Regulacion)</option>
                                                    </select>
                                                    <label for="val-skill5">Área a revisar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="val-suggestions2" name="val-suggestions2" rows="6"></textarea>
                                                    <label for="val-suggestions2">Descripción</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material form-material-primary floating">
                                                    <textarea class="form-control input-sm" id="val-suggestions2" name="val-suggestions2" rows="6"></textarea>
                                                    <label for="val-suggestions2">Objetivo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                    <label for="val-skill4">S. Incio</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">21</option>
                                                        <option value="2">22</option>
                                                        <option value="3">23</option>
                                                        <option value="4">24</option>
                                                        <option value="5">25</option>
                                                        <option value="6">26</option>
                                                        <option value="7">27</option>
                                                        <option value="8">28</option>
                                                        <option value="9">29</option>
                                                        <option value="10">30</option>
                                                    </select>
                                                    <label for="val-skill4">S. Fin</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">21</option>
                                                        <option value="2">22</option>
                                                        <option value="3">23</option>
                                                        <option value="4">24</option>
                                                        <option value="5">25</option>
                                                        <option value="6">26</option>
                                                        <option value="7">27</option>
                                                        <option value="8">28</option>
                                                        <option value="9">29</option>
                                                        <option value="10">30</option>
                                                    </select>
                                                    <label for="val-skill4">TS. Revisión</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">191</option>
                                                        <option value="2">192</option>
                                                        <option value="3">193</option>
                                                        <option value="4">194</option>
                                                        <option value="5">195</option>
                                                        <option value="6">196</option>
                                                        <option value="7">197</option>
                                                        <option value="8">198</option>
                                                        <option value="9">199</option>
                                                        <option value="10">200</option>
                                                    </select>
                                                    <label for="val-skill4">TS. Hombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="js-datepicker form-control input-sm" type="text" id="example-datepicker4" name="example-datepicker4" data-date-format="mm/dd/yy">
                                                    <label for="example-datepicker4">P. Inicio</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="js-datepicker form-control input-sm" type="text" id="example-datepicker4" name="example-datepicker4" data-date-format="mm/dd/yy">
                                                    <label for="example-datepicker4">P. Fin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">1/2014</option>
                                                        <option value="otro">2/2014</option>
                                                        <option value="otro">3/2014</option>
                                                        <option value="otro">4/2014</option>
                                                        <option value="otro">5/2014</option>
                                                        <option value="otro">6/2014</option>
                                                        <option value="otro">7/2014</option>
                                                        <option value="otro">8/2014</option>
                                                        <option value="otro">9/2014</option>
                                                        <option value="otro">10/2014</option>
                                                        <option value="otro">11/2014</option>
                                                        <option value="otro">12/2014</option>
                                                        <option value="otro">13/2014</option>
                                                        <option value="otro">14/2014</option>
                                                    </select>
                                                    <label for="val-skill4">Auditoría precedente</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">Se determinará en la auditoría.</option>
                                                        <option value="otro">100%</option>
                                                    </select>
                                                    <label for="val-skill4">Muestra</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="oic">100%</option>
                                                        <option value="otro">90%</option>
                                                        <option value="otro">80%</option>
                                                        <option value="otro">70%</option>
                                                        <option value="otro">60%</option>
                                                        <option value="otro">50%</option>
                                                    </select>
                                                    <label for="val-skill4">Universo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</option>
                                                        <option value="2">Autorizaciones otorgadas en forma deficiente.</option>
                                                        <option value="3">Denuncias de captacion irregular por entidades no autorizadas atendida inoportunamente.</option>
                                                        <option value="4">Informacion incorrecta de emisoras bursatiles detectada inoportunamente.</option>
                                                    </select>
                                                    <label for="val-skill4">Riesgo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-material form-material-primary">
                                                    <button class="btn btn-success btn-sm push-5-r push-10" type="button"><i class="fa fa-plus"></i></button>
                                                    <label for="val-skill4">&nbsp;</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="val-skill4" name="val-skill4">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                    <label for="val-skill4">Cuadrante</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <table class="table table-striped table-vcenter table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="text-left">Riesgo</th>
                                                        <th class="text-left">Cuadrante</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.2</td>
                                                        <td>Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</td>
                                                        <td rowspan="3" class="text-center">1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.4</td>
                                                        <td>Autorizaciones otorgadas en forma deficiente.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1.5</td>
                                                        <td>Denuncias de captacion irregular por entidades no autorizadas atendida inoportunamente.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                            <!-- END Material Forms Validation -->
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

        <!-- Page JS Plugins -->
        <script src="../../assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="../../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../assets/js/pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <script src="../../assets/js/pages/base_forms_validation.js"></script>

        <!-- Page JS Plugins -->
        <script src="../../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="../../assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="../../assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="../../assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="../../assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="../../assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="../../assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="../../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
            
            $('.mp1').addClass('open');
            $('.ms1_1').addClass('active');
        </script>
    </body>
</html>
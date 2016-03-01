<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <!-- head -->
    <?php include_once('zlib/head.php'); ?>
    <!-- END head-->
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php include_once('zlib/sideContent.php'); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->            
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <?php include_once('zlib/sideHeader.php'); ?>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li>
                                    <a class="" href="../dashboard">
                                        <i class="si si-speedometer"></i>
                                        <span class="sidebar-mini-hide">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Actividades</span></li>
                                <li class="mp1 open">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Planeación anual</span></a>
                                    <ul>
                                        <li>
                                            <a class="ms1 active" href="pat">PAT</a>
                                        </li>
                                        <li>
                                            <a class="ms2" href="#">Presentación ejecutiva</a>
                                        </li>
                                        <li>
                                            <a class="ms3" href="#">Mapa de riesgos</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php include_once('zlib/headerNavigation.php'); ?>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    
                </ul>
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
                                PAT 2016 <small>Programa Anual de Trabajo</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li><a class="link-effect" href="m1_0_pat_completo">PAT 2016</a></li>
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
                                <a href="#search-projects">Revisiones</a>
                            </li>
                            <li>
                                <a href="#search-validaciones">Validaciones</a>
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
                                    <h2 class="push-10">Estatus <span class="h5 font-w400 text-muted">PAT</span></h2>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-1">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-0 fa-4x text-success"></i>
                                                <div class="font-w600 push-15-t">Creado</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-1 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">En revisión</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-2 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">Finalizado</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-3 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">Impreso</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="fa fa-battery-4 fa-4x text-muted"></i>
                                                <div class="font-w600 push-15-t">Emitido</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="border-b push-30">
                                    <h2 class="push-10">Opciones <span class="h5 font-w400 text-muted">Documento</span></h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="javascript:void(0)">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Completo</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="./archivos/PAT_COMPLETOex.xlsx">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Completo</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="javascript:void(0)">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Detalle</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="./archivos/PAT_DETALLADO.xlsx">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Detalle</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="javascript:void(0)">
                                            <div class="block-content block-content-full bg-flat clearfix">
                                                <i class="si si-eye fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Resumen</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2">
                                        <a class="block block-link-hover2" href="./archivos/PAT_DETALLADO.xlsx">
                                            <div class="block-content block-content-full bg-primary clearfix">
                                                <i class="si si-cloud-download fa-2x text-white pull-right"></i>
                                                <span class="h4 font-w700 text-white">PAT</span>
                                                <span class="h4 text-white-op">Resumen</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End General -->
                            <!-- Revisiones -->
                            <div class="tab-pane fade fade-up" id="search-projects">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Revisiones encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-center">P/A</th>
                                            <th class="text-center">Clave</th>
                                            <th class="text-left">Área a revisar</th>
                                            <th class="text-left">Inicio</th>
                                            <th class="text-left">Fin</th>
                                            <th class="text-left">Validar</th>
                                            <th class="text-left">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-small2">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller_SD.tiff">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado" href="./archivos/curso_taller SD.pdf" target="_blank">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </button>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </button>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="text-center">P</td>
                                            <td class="text-center">700</td>
                                            <td>DG de Visitas de Investigación (Proceso de Soporte Legal)</td>
                                            <td>01/01/2013</td>
                                            <td>31/12/2013</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Enviar a validación">
                                                        <i class="fa fa-send-o"></i>
                                                    </a>
                                                    <a class="btn btn-warning btn-xs" disabled data-toggle="tooltip" data-placement="top" title="Validar" href="m1_0_0_form_pat_validar.php" >
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-success btn-xs" disabled type="button" data-toggle="tooltip" data-placement="top" title="Archivo digitalizado">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </button>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Editar">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Revisiones -->
                            <!-- Validaciones -->
                            <div class="tab-pane fade fade-up" id="search-validaciones">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Validaciones encontrados</span></h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="No. Revisión">#</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Tipo de revisión">Tipo</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Programada / Adicional">P/A</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Clave Programa">Clave</th>
                                                <th class="text-center">Instancia</th>
                                                <th class="text-left">Justificación</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Área a Revisar">Área</th>
                                                <th class="text-left">Descripción</th>
                                                <th class="text-left">Objetivo</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Semana Programada de Inicio">S.P.I.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Semanan Programada de Término">S.P.T.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Total Semanas Revisión">T.S.R.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Total Semanas Hombre">T.S.H.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Periodo de Revisión Inicio">P.R.I.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Periodo de Revisión Fin">P.R.F.</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Auditoria Procedente">A.P.</th>
                                                <th class="text-center">Muestra</th>
                                                <th class="text-center">Universo</th>
                                                <th class="text-left">Riesgos</th>
                                                <th class="text-left">Cuadrante</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Revisado">R</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Validado">V</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Comentarios">C</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="info">
                                                <td class="text-center">1</td>
                                                <td class="text-center">Auditoria</td>
                                                <td class="text-center">P</td>
                                                <td class="text-center">700</td>
                                                <td class="text-center">OIC</td>
                                                <td class="text-left">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                                <td class="text-left">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</td>
                                                <td class="text-left">
                                                    Evaluar que el control interno establecido en las áreas sustantivas de la CNBV respecto a los procesos de la supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión ; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, se haya efectuado de conformidad con el marco legal aplicable y que los resultados hayan sido debidamente informados.
                                                </td>
                                                <td class="text-left">
                                                    Verificar el cumplimiento de los procesos de supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, conforme al marco legal aplicable y que los resultados hayan sido informados.
                                                </td>
                                                <td>1</td>
                                                <td>26</td>
                                                <td>26</td>
                                                <td>193</td>
                                                <td>01/01/2013</td>
                                                <td>31/12/2013</td>
                                                <td>0/0</td>
                                                <td>Se determinará en la auditoría.</td>
                                                <td>100%</td>
                                                <td>
                                                    <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                                    <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                                </td>
                                                <td class="text-center">
                                                    <p>1</p>
                                                    <p>1</p>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-small">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">Auditoria</td>
                                                <td class="text-center">P</td>
                                                <td class="text-center">700</td>
                                                <td class="text-center">OIC</td>
                                                <td class="text-left">ÁREAS CRÍTICAS PROCLIVES A CORRUPCIÓN</td>
                                                <td class="text-left">DGs de Supervisión de la CNBV (Proceso de Supervisión, Autorizaciones y Sanciones)</td>
                                                <td class="text-left">
                                                    Evaluar que el control interno establecido en las áreas sustantivas de la CNBV respecto a los procesos de la supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión ; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, se haya efectuado de conformidad con el marco legal aplicable y que los resultados hayan sido debidamente informados.
                                                </td>
                                                <td class="text-left">
                                                    Verificar el cumplimiento de los procesos de supervisión, autorizaciones y sanciones de las Vicepresidencias de Supervisión de Grupos e Intermediarios Financieros A y B, Banca de Desarrollo y Finanzas Populares y Supervisión Bursátil; asi como la alineación con la Dirección General de Métodos y Procesos de Supervisión; la coordinación con las Direcciones Generales de Autorizaciones al Sistema Financiero y de Autorizaciones Especializadas y la Dirección General de Delitos y Sanciones; además de la interacción con las áreas soporte de las Vicepresidencias Técnica y de Supervisión de Procesos Preventivos, conforme al marco legal aplicable y que los resultados hayan sido informados.
                                                </td>
                                                <td>1</td>
                                                <td>26</td>
                                                <td>26</td>
                                                <td>193</td>
                                                <td>01/01/2013</td>
                                                <td>31/12/2013</td>
                                                <td>0/0</td>
                                                <td>Se determinará en la auditoría.</td>
                                                <td>100%</td>
                                                <td>
                                                    <p>1.2 Supervisores beneficiados a traves de acuerdos con entidades supervisadas.</p>
                                                    <p>1.3 Autorizaciones otorgadas en forma deficiente.</p>
                                                </td>
                                                <td class="text-center">
                                                    <p>1</p>
                                                    <p>1</p>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <label class="css-input switch switch-primary">
                                                        <input type="checkbox" checked><span></span>
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm">
                                                        <i class="fa fa-commenting-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>

                            </div>
                            <!-- END Revisiones -->
                            <!-- Settings -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-3">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-list fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Ordenar</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-printer fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Imprimir lista</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="agregar-revision">
                                            <div class="block-content block-content-full">
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Agregar Revisión</div>
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
            <?php include_once('zlib/footer.php'); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Small Modal -->
        <div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content js-chat-container" data-chat-mode="fixed">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('../../assets/img/photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="../../assets/img/avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Coordinador</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                        <!-- Messages -->
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                        </div>
                                        <div class="font-s12 text-muted text-center push-20-t push-10"><em>Hoy</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-r">
                                            <div class="block-content block-content-full block-content-mini bg-gray-light">Todo OK</div>
                                        </div>
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <form action="revisiones" method="post">
                                            <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Small Modal -->

        <!-- Small Modal -->
        <div class="modal" id="modal-small2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Comentarios</h3>
                        </div>
                        <div class="block-content">
                            <!-- Single Chat (Chat Window 3) -->
                            <div class="block">
                                <div class="block">
                                    <div class="bg-image" style="background-image: url('assets/img/photos/photo25.jpg');">
                                        <div class="block-content block-content-full bg-black-op text-center">
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="assets/img/avatars/avatar9.jpg" alt="">
                                            </div>
                                            <h3 class="h4"><span class="text-white">Titular</span></h3>
                                        </div>
                                    </div>
                                    <div class="js-chat-talk overflow-y-auto block-content block-content-full" data-chat-id="3">
                                        <!-- Messages -->
                                        <div class="font-s12 text-muted text-center push-20-t push-15"><em>Ayer</em></div>
                                        <div class="block block-rounded block-transparent push-15 push-50-l">
                                            <div class="block-content block-content-full block-content-mini bg-gray-lighter">Revisa, la propuesta, sls</div>
                                        </div>
                                        <!-- END Messages -->
                                    </div>
                                    <div class="js-chat-form block-content block-content-full block-content-mini">
                                        <form action="m1_0_0_form_pat_completo.php" method="post">
                                            <input class="js-chat-input form-control" type="text" data-target-chat-id="3" placeholder="Type a message and hit enter..">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END Single Chat (Chat Window 3) -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Small Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php include_once('zlib/oneuiCore.php'); ?>
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
        <script src="../../assets/js/pages/base_ui_chat.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });
        </script>
    </body>
</html>
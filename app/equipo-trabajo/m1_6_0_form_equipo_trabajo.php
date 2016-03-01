<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>CNBV</title>
        
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php include_once('sideContent.php'); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->            
            <?php include_once('menu.php'); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php include_once('headerNavigation.php'); ?>
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
                                Detalle <small>Descripción</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Planeación anual</li>
                                <li>Equipo de trabajo</li>
                                <li><a class="link-effect" href="">Detalle</a></li>
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
                                <a href="#search-team">Equipo de trabajo</a>
                            </li>
                            <li>
                                <a href="#search-auditors">Auditores</a>
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
                            <!-- Equipo -->
                            <div class="tab-pane fade fade-up in active" id="search-team">
                                <div class="border-b push-30">
                                    <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Auditores encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left">Rol</th>
                                            <th class="text-left">Nombre</th>
                                            <th class="text-left">Puesto</th>
                                            <th class="text-center">Quitar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jefe de grupo</td>
                                            <td>Oscar Osorio</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-danger" type="button"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Auditor</td>
                                            <td>Eduardo Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-danger" type="button"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Equipo -->
                            <!-- Auditores -->
                            <div class="tab-pane fade fade-up" id="search-auditors">
                                <div class="border-b push-30">
                                    <h2 class="push-10">10 <span class="h5 font-w400 text-muted">Auditores encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-check-square-o"></i></th>
                                            <th class="text-left">Rol</th>
                                            <th class="text-left">Nombre</th>
                                            <th class="text-left">Puesto</th>
                                            <th class="text-center">Experiencia</th>
                                            <th class="text-center">Detalle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au">Auditor</option>
                                                    <option value="co" selected>Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Oscar Osorio</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="css-input css-checkbox css-checkbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option value="au" selected>Auditor</option>
                                                    <option value="co">Jefe de grupo</option>
                                                </select>
                                            </td>
                                            <td>Eduardo Martínez Martínez</td>
                                            <td>Puesto XXXXXXXX</td>
                                            <td class="text-center">
                                                <span class="badge badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-large" type="button">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Auditores -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-lg-2 col-lg-offset-1">
                                        <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                            <div class="block-content block-content-full">
                                                <i class="si si-paper-plane fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Revisión</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
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
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                
                <div class="pull-left">
                    <a class="font-w600" href="" target="_blank">CNBV</a> &copy; <span class="js-year-copy"></span>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Large Modal -->
        <div class="modal" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Competencias</h3>
                        </div>
                        <div class="block-content">
                            <p>Puesto: <strong>Título del puesto</strong></p>
                            <p>Licenciatura: <strong>Título de la licenciatura</strong></p>
                            <p>Años de experiencia: <strong>10</strong></p>
                            
                            <div class="block">
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active">
                                        <a href="#search-edu">Educación</a>
                                    </li>
                                    <li>
                                        <a href="#search-hab">Habilidades</a>
                                    </li>
                                    <li>
                                        <a href="#search-cer">Certificaciones</a>
                                    </li>
                                    <li>
                                        <a href="#search-cur">Cursos</a>
                                    </li>
                                    <li>
                                        <a href="#search-epr">Experiencia profesional</a>
                                    </li>
                                    <li>
                                        <a href="#search-aex">Áreas de experiencia</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content bg-white">
                                    <!-- Educación -->
                                    <div class="tab-pane fade fade-up in active" id="search-edu">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Institución</th>
                                                    <th class="text-left">Título</th>
                                                    <th class="text-center">Desde</th>
                                                    <th class="text-center">Hasta</th>
                                                    <th class="text-center">Años</th>
                                                    <th class="text-center">Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>UNAM</td>
                                                    <td>Doctorado en XXXXXXXX</td>
                                                    <td class="text-center">01/01/2000</td>
                                                    <td class="text-center">12/12/2005</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary">5</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-warning">En curso</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>UNAM</td>
                                                    <td>Maestría en XXXXXXXX</td>
                                                    <td class="text-center">01/01/2000</td>
                                                    <td class="text-center">12/12/2005</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary">5</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-success">Terminado</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>UNAM</td>
                                                    <td>Licenciatura en XXXXXXXX</td>
                                                    <td class="text-center">01/01/2000</td>
                                                    <td class="text-center">12/12/2005</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary">5</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-success">Terminado</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Educación -->
                                    <!-- Habilidades -->
                                    <div class="tab-pane fade fade-up" id="search-hab">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Habilidad</th>
                                                    <th class="text-center">Nivel</th>
                                                    <th class="text-center">Años</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Conocimiendo de las regulaciones estatales y federales</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-default">Basico</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary">3</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Administración de información</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-warning">Intermedio</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary">5</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Políticas y planeamiento</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-success">Experto</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-primary">10</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Habilidades -->
                                    <!-- Certificaciones -->
                                    <div class="tab-pane fade fade-up" id="search-cer">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Certificación</th>
                                                    <th class="text-center">Año</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Auditorías en TIC</td>
                                                    <td class="text-center">2010</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>ITIL</td>
                                                    <td class="text-center">2012</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>COBIT 5</td>
                                                    <td class="text-center">2015</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Certificaciones -->
                                    <!-- Cursos -->
                                    <div class="tab-pane fade fade-up" id="search-cur">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Cursos</th>
                                                    <th class="text-center">Duración</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Curso en XXXXXXXX</td>
                                                    <td class="text-center">1 mes</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Curso en XXXXXXXX</td>
                                                    <td class="text-center">3 meses</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Curso en XXXXXXXX</td>
                                                    <td class="text-center">6 meses</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Cursos -->
                                    <!-- Experiencia profesional -->
                                    <div class="tab-pane fade fade-up" id="search-epr">
                                        <table class="table table-striped table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Empresa</th>
                                                    <th class="text-left">Giro</th>
                                                    <th class="text-left">Puesto</th>
                                                    <th class="text-center">Desde</th>
                                                    <th class="text-center">Hasta</th>
                                                    <th class="text-left">Actividades</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nombre Empresa</td>
                                                    <td>Tecnología</td>
                                                    <td>Consultor</td>
                                                    <td class="text-center">01/01/2014</td>
                                                    <td class="text-center">12/12/2015</td>
                                                    <td>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Nombre Empresa</td>
                                                    <td>Tecnología</td>
                                                    <td>Consultor</td>
                                                    <td class="text-center">01/01/2014</td>
                                                    <td class="text-center">12/12/2015</td>
                                                    <td>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nombre Empresa</td>
                                                    <td>Tecnología</td>
                                                    <td>Consultor</td>
                                                    <td class="text-center">01/01/2014</td>
                                                    <td class="text-center">12/12/2015</td>
                                                    <td>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Experiencia profesional -->
                                     <!-- Áreas de experiencia -->
                                    <div class="tab-pane fade fade-up" id="search-aex">
                                        <table class="table table-striped table-vcenter table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">Área</th>
                                                    <th class="text-left">Subárea</th>
                                                    <th class="text-center">Tiempo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Administrativos</td>
                                                    <td>Administración de oficina</td>
                                                    <td class="text-center">Menos de 3 años</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Administrativos</td>
                                                    <td>Administración de riesgo</td>
                                                    <td class="text-center">3 años o más</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Administrativos</td>
                                                    <td>Administración de seguros y fianzas</td>
                                                    <td class="text-center">Menos de 3 años</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Administrativos</td>
                                                    <td>Administración General</td>
                                                    <td class="text-center">Menos de 3 años</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Certificaciones -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Large Modal -->


        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>
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
                                Usuarios <small>Administración</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Administración</li>
                                <li>Usuarios</li>
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
                                <a href="#search-usuarios">Lista Usuarios</a>
                            </li>
                            <li>
                                <a href="#search-areas">Lista Personal Áreas</a>
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
                            <!-- Usuarios -->
                            <div class="tab-pane fade fade-up in active" id="search-usuarios">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Usuarios encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-left">Cargo</th>
                                            <th class="text-left">Nombre</th>
                                            <th class="text-left">Apellido Paterno</th>
                                            <th class="text-left">Apellido Materno</th>
                                            <th class="text-center">Área</th>
                                            <th class="text-left">Nivel</th>
                                            <th class="text-left">Acciones</th>
                                            <th class="text-center">Activo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Usuarios -->
                            <!-- Áreas -->
                            <div class="tab-pane fade fade-up" id="search-areas">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Usuarios encontrados</span></h2>
                                </div>
                                <table class="table table-striped table-vcenter table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-left">Entidad</th>
                                            <th class="text-left">Área</th>
                                            <th class="text-left">Cargo</th>
                                            <th class="text-left">Nombre</th>
                                            <th class="text-left">Apellido Paterno</th>
                                            <th class="text-left">Apellido Materno</th>
                                            <th class="text-left">Nivel</th>
                                            <th class="text-left">Acciones</th>
                                            <th class="text-center">Activo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-left">Entidad</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form_area.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="text-left">Entidad</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form_area.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="text-left">Entidad</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form_area.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="text-left">Entidad</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form_area.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="text-left">Entidad</td>
                                            <td class="text-center">OIC</td>
                                            <td class="text-left">Titular del OIC</td>
                                            <td class="text-left">Guillermo</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Apellido</td>
                                            <td class="text-left">Director de área</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="CV" href="./archivos/CV.docx">
                                                        <i class="fa fa-cloud-download"></i>
                                                    </a>
                                                    <button class="btn btn-info btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Consulta">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="adm_usuarios_form_area.php">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <label class="css-input switch switch-sm switch-primary">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Áreas -->
                            
                            <!-- Settings -->
                            <div class="tab-pane" id="btabs-alt-static-settings">
                                <h4 class="font-w300 push-15">Opciones</h4>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-2 col-lg-2 col-lg-offset-2">
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
                                        <a class="block block-link-hover3 text-center" href="editar-usuario">
                                            <div class="block-content block-content-full">
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Crear Usuario</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-sm-2 col-lg-2">
                                        <a class="block block-link-hover3 text-center" href="editar-usuario-area">
                                            <div class="block-content block-content-full">
                                                <i class="si si-doc fa-4x text-primary"></i>
                                                <div class="font-w600 push-15-t">Crear Usuario Área</div>
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

        <!-- Small Modal -->
        <div class="modal" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="../../../assets/img/avatars/avatar9.jpg" alt="">
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
                                            <div class="push-10"><img class="img-avatar img-avatar-thumb" src="../../../assets/img/avatars/avatar9.jpg" alt="">
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

            $('.mp10').addClass('active');
        </script>
    </body>
</html>
<aside id="side-overlay">
<!-- Side Overlay Scroll Container -->
<div id="side-overlay-scroll">
    <!-- Side Header -->
    <div class="side-header side-content">
        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-times"></i>
        </button>
        <span>
            <img class="img-avatar img-avatar32" src="../../assets/img/avatars/avatar10.jpg" alt="">
            <span class="font-w600 push-10-l">PAKAL AI</span>
        </span>
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="side-content remove-padding-t">
        <!-- Notifications -->
        <div class="block pull-r-l">
            <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                    </li>
                </ul>
                <h3 class="block-title">Alertas</h3>
            </div>
            <div class="block-content">
                <!-- Activity List -->
                <ul class="list list-activity">
                    <li>
                        <i class="si si-pencil text-info"></i>
                        <div class="font-w600">Documento pendiente: (Revisión/Corrección/Validación)</div>
                        <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documento.pdf</a></div>
                        <div><small class="text-muted">Solo tiene 2 días para : (Revisión/Corrección/Validación)</small></div>
                    </li>
                    <li>
                        <i class="si si-close text-danger"></i>
                        <div class="font-w600">La actividad "XXXXXXXXXXXXXXX"</div>
                        <div><a href="javascript:void(0)">Link de referencia</a></div>
                        <div><small class="text-danger"> vence en 6 días</small></div>
                    </li>
                    <li>
                        <i class="si si-close text-danger"></i>
                        <div class="font-w600">La actividad "COMSOC"</div>
                        <div><small class="text-danger"> revisión en 10 días</small></div>
                        <div><small class="text-danger"> oficio ultimos 5 días</small></div>
                    </li>
                    <li>
                        <i class="si si-close text-danger"></i>
                        <div class="font-w600">La actividad "Seguimiento"</div>
                        <div><small class="text-"> vence en 5 días hábiles</small></div>
                        <div><small class="text-danger"> ultimo día</small></div>
                    </li>
                    <li>
                        <i class="si si-close text-danger"></i>
                        <div class="font-w600">La actividad "Observaciones"</div>
                        <div><small class="text-warning"> vence 12-12-2015</small></div>
                        <div><small class="text-danger"> entrega 12-12-2015</small></div>
                    </li>
                </ul>
                <div class="text-center">
                    <small><a href="javascript:void(0)">Leer más..</a></small>
                </div>
                <!-- END Activity List -->
            </div>
        </div>
        <!-- END Notifications -->
    </div>
    <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
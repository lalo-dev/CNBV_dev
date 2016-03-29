<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 14/03/2016 12:47:20																		  *
	**********************************************************************************************/
	
	
?>
<ul class="nav-header pull-right">
    <li>
        <div class="btn-group">
            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                <img src="img/avatars/avatar10.jpg" alt="Avatar">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-header">Usuario</li>
                <li>
                    <a tabindex="-1" href="">
                        <i class="si si-user pull-right"></i>
                        <span class="badge badge-success pull-right">1</span>Perfil
                    </a>
                </li>
                <li class="divider"></li>
                <li class="dropdown-header">Actions</li>
                <li>
                    <a tabindex="-1" href="base_pages_lock.html">
                        <i class="si si-lock pull-right"></i>Bloquear
                    </a>
                </li>
                <li>
                    <a tabindex="-1" href="<?php echo $logoutAction; ?>">
                        <i class="si si-logout pull-right"></i>Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
        <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
            <i class="fa fa-tasks"></i>
        </button>
    </li>
</ul>
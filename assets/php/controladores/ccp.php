<?php
	include_once("../01Clases/01Util/ConexionBD.php");

	$vConn = new ConexionBD();
	
	if(isset($_REQUEST['acc'])){
		
		$vAcc = $_REQUEST['acc'];
		
		switch($vAcc)
		{
			//########################################################################
			//Clientes
			case "ultimoCliente":
					ultimoCliente();
				break;
			case "totalClientes":
					totalClientes();
				break;
			case "listaClientes":
					listaClientes();
				break;
			case "guardaCliente":
					guardaCliente();
				break;
			case "guardaAreaCliente":
					guardaAreaCliente();
				break;
			case "guardaTelefonoCliente":
					guardaTelefonoCliente();
				break;
			case "guardaDireccionCliente":
					guardaDireccionCliente();
				break;
			//Clientes contacto
			case "guardaContactoCliente":
					guardaContactoCliente();
				break;
			case "guardaTelefonoContactoCliente":
					guardaTelefonoContactoCliente();
				break;
			case "guardaEmailContactoCliente":
					guardaEmailContactoCliente();
				break;
			//########################################################################
			//Contratos
			case "totalContratos":
					totalContratos();
				break;
			case "listaContratos":
					listaContratos();
				break;
			//########################################################################
			//Proyectos
			case "totalProyectos":
					totalProyectos();
				break;
			case "listaProyectos":
					listaProyectos();
				break;
		}
				
	}

	//##############################        Sección clientes             #############################################
	function ultimoCliente() {
		global $vConn;

		$vQuery = "SELECT MAX(idCliente) AS cliente FROM clientes LIMIT 1";
		$vRes   = $vConn->ExecuteWithReturn($vQuery);

		echo $vRes[0]['cliente'];
	}

	function totalClientes() {
		global $vConn;

		$vQuery = "SELECT COUNT(idCliente) AS total FROM clientes";
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = $vRes[0]['total'];

		echo $html;
	}

	function listaClientes() {
		global $vConn;

		$vQuery = "SELECT idCliente,nombre FROM clientes ORDER BY nombre ASC";
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = '';

		foreach ($vRes as $cliente) {
			$html .= 	"<tr>
							<td>
								<div class=\"btn-toolbar\">
									<div class=\"btn-group\">
										<button class=\"btn btn-primary dropdown-toggle btn-sm btn-alt\" data-toggle=\"dropdown\">
											<span class=\"caret\"></span>
										</button>
										<ul class=\"dropdown-menu dropdown-custom\">
											<li>
												<a href=\"javascript: app.mostrar('subsection','detail_customer','yes')\">
													<i class=\"fa fa-eye pull-right\"></i>Detalle
												</a>
												<a href=\"javascript: app.mostrar('subsection','form_customer','yes')\">
													<i class=\"fa fa-pencil pull-right\"></i>Editar
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
							<td>
								<span>
									<a href=\"javascript:void(0)\" onclick=\"$('#tblContratos,#totalContratos,#agregarContrato').show();listaContratos(".$cliente['idCliente'].");$('#tblProyectos > tbody > tr').remove();$('#aTotalProyectos').text(0);\">
										".$cliente['nombre']."
									</a>
								</span>
							</td>
							<td>
								<label class=\"switch switch-primary\">
									<input type=\"checkbox\" checked=\"\" /><span></span>
								</label>
							</td>
						</tr>";
		}

		echo $html;
	}

	function guardaCliente() {
		global $vConn;

		$nombre = $_REQUEST['nombre'];
		$rfc    = $_REQUEST['rfc'];
		$rs     = $_REQUEST['rs'];
		$giro   = $_REQUEST['giro'];
		$url    = $_REQUEST['url'];
		$nota   = $_REQUEST['nota'];

		$vQuery = "INSERT INTO clientes VALUES ('','".$nombre."','".$rfc."','".$rs."','".$giro."','".$url."','".$nota."','1')";
		$vRes   = $vConn->ExecuteWithoutReturn($vQuery);

		echo $vRes;
	}

	function listaAreasCliente() {
	}

	function guardaAreaCliente() {
		global $vConn;

		//Eliminar las areas del cliente
		//$vQuery = "DELETE FROM clientesareas WHERE idCliente=".$_REQUEST['cliente'];
		//$vRes = $vConn->ExecuteWithoutReturn($vQuery);

		$cliente    = $_REQUEST['cliente'];
		$area       = $_REQUEST['area'];
		$comentario = $_REQUEST['comentario'];

		$vQuery = "INSERT INTO clientesareas VALUES ('','".$cliente."','".$area."','".$comentario."')";
		$vRes   = $vConn->ExecuteWithoutReturn($vQuery);

		echo $vRes;
	}

	function guardaTelefonoCliente() {
		global $vConn;

		$cliente   = $_REQUEST['cliente'];
		$telefono  = $_REQUEST['telefono'];
		$extencion = $_REQUEST['extencion'];
		$tipo      = $_REQUEST['tipo'];

		$vQuery = "INSERT INTO clientestelefonos VALUES ('','".$cliente."','".$telefono."','".$extencion."','".$tipo."')";
		$vRes   = $vConn->ExecuteWithoutReturn($vQuery);

		echo $vRes;	
	}

	function guardaDireccionCliente() {
		global $vConn;

		$cliente   = $_REQUEST['cliente'];
		$calle     = $_REQUEST['calle'];
		$colonia   = $_REQUEST['colonia'];
		$municipio = $_REQUEST['municipio'];
		$ciudad    = $_REQUEST['ciudad'];
		$estado    = $_REQUEST['estado'];
		$pais      = $_REQUEST['pais'];
		$cp        = $_REQUEST['cp'];

		$vQuery = "INSERT INTO clientesdirecciones VALUES ('','".$cliente."','".$calle."','".$colonia."','".$municipio."','".$ciudad."','".$estado."','".$pais."','".$cp."')";
		$vRes   = $vConn->ExecuteWithoutReturn($vQuery);

		echo $vRes;
	}

	function guardaContactoCliente() {
		global $vConn;

		$cliente = $_REQUEST['cliente'];
		$nombre  = $_REQUEST['nombre'];
		$ap      = $_REQUEST['ap'];
		$am      =$_REQUEST['am'];
		$puesto  = $_REQUEST['puesto'];

		$vQuery = "INSERT INTO contactos VALUES ('','".$cliente."','".$nombre."','".$ap."','".$am."','".$puesto."')";
		$vRes   = $vConn->ExecuteWithoutReturn($vQuery);

		$vQuery = "SELECT MAX(idContacto) AS contacto FROM contactos LIMIT 1";
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		echo $vRes[0]['contacto'];
	}

	function guardaEmailContactoCliente() {
		global $vConn;

		$contacto = $_REQUEST['contactoCliente'];
		$email    = $_REQUEST['email'];

		$vQuery = "INSERT INTO contactosemails VALUES('','".$contacto."','".$email."')";
		$vRes   = $vConn->ExecuteWithoutReturn($vQuery);

		echo $vRes;
	}

	function guardaTelefonoContactoCliente() {
		global $vConn;

		$contacto  = $_REQUEST['contactoCliente'];
		$telefono  = $_REQUEST['telefono'];
		$extencion = $_REQUEST['extencion'];
		$tipo      = $_REQUEST['tipo'];

		$vQuery = "INSERT INTO contactostelefonos VALUES ('','".$contacto."','".$telefono."','".$extencion."','".$tipo."')";
		$vRes = $vConn->ExecuteWithoutReturn($vQuery);

		echo $vRes;
	}

	//##############################        Sección contratos            #############################################
	function totalContratos() {
		global $vConn;

		$vQuery = "SELECT COUNT(idContrato) AS total FROM contratos WHERE idCliente=".$_REQUEST['cliente'];
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = $vRes[0]['total'];

		echo $html;
	}

	function listaContratos() {
		global $vConn;

		$vQuery = "SELECT idContrato,nombre FROM contratos WHERE idCliente=".$_REQUEST['cliente']." ORDER BY nombre ASC";
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = '';

		foreach ($vRes as $contrato) {
			$html .= 	"<tr>
							<td>
								<div class=\"btn-toolbar\">
									<div class=\"btn-group\">
										<button class=\"btn btn-primary dropdown-toggle btn-sm btn-alt\" data-toggle=\"dropdown\">
											<span class=\"caret\"></span>
										</button>
										<ul class=\"dropdown-menu dropdown-custom\">
											<li>
												<a href=\"javascript: app.mostrar('subsection','detail_contract','yes')\">
													<i class=\"fa fa-eye pull-right\"></i>Detalle
												</a>
												<a href=\"javascript: app.mostrar('subsection','form_contract','yes')\">
													<i class=\"fa fa-pencil pull-right\"></i>Editar
												</a>
											</li>
											<li class=\"divider\"></li>
											<li>
												<a id=\"irAntecedentes\" style=\"cursor: pointer;\">
													<i class=\"fa fa-folder pull-right\"></i>Antecedentes
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
							<td>
								<span><a href=\"javascript:void(0)\" onclick=\"$('#tblProyectos,#totalProyectos,#agregarProyecto').show();listaProyectos(".$contrato['idContrato'].");\">".$contrato['nombre']."</a></span>
							</td>
							<td>
								<label class=\"switch switch-primary\">
									<input type=\"checkbox\" checked=\"\" /><span></span>
								</label>
							</td>
						</tr>";
		}

		echo $html;
	}

	//##############################        Sección proyectos            #############################################
	function totalProyectos() {
		global $vConn;

		$vQuery = "SELECT COUNT(idProyecto) AS total FROM proyectos WHERE idContrato=".$_REQUEST['contrato'];
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = $vRes[0]['total'];

		echo $html;
	}

	function listaProyectos() {
		global $vConn;

		$vQuery = "SELECT idProyecto,nombre FROM proyectos WHERE idContrato=".$_REQUEST['contrato']." ORDER BY nombre ASC";
		$vRes = $vConn->ExecuteWithReturn($vQuery);

		$html = '';

		foreach ($vRes as $proyecto) {
			$html .= 	"<tr>
							<td>
								<div class=\"btn-toolbar\">
									<div class=\"btn-group\">
										<button class=\"btn btn-primary dropdown-toggle btn-sm btn-alt\" data-toggle=\"dropdown\">
											<span class=\"caret\"></span>
										</button>
										<ul class=\"dropdown-menu dropdown-custom\">
											<li>
												<a href=\"javascript: app.mostrar('subsection','detail_project','yes')\">
													<i class=\"fa fa-eye pull-right\"></i>Detalle
												</a>
												<a href=\"javascript: app.mostrar('subsection','form_project','yes')\">
													<i class=\"fa fa-pencil pull-right\"></i>Editar
												</a>
											</li>
											<li class=\"divider\"></li>
											<li>
												<a id=\"irAntecedentesp\" style=\"cursor: pointer;\">
													<i class=\"fa fa-sitemap pull-right\"></i>Antecedentes
												</a>
												<a id=\"irRoadmap\" style=\"cursor: pointer;\">
													<i class=\"fa fa-sitemap pull-right\"></i>Supervisión
												</a>
												<a id=\"irAseguramiento\" style=\"cursor: pointer;\">
													<i class=\"fa fa-sitemap pull-right\"></i>Aseguramiento
												</a>
												<a id=\"irInventario\" style=\"cursor: pointer;\">
													<i class=\"fa fa-sitemap pull-right\"></i>Inventario
												</a>
												<a id=\"irValidaciones\" style=\"cursor: pointer;\">
													<i class=\"fa fa-sitemap pull-right\"></i>Validaciones
												</a>
												<a id=\"irTablero\" style=\"cursor: pointer;\">
													<i class=\"fa fa-sitemap pull-right\"></i>Tablero de semáforos
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
							<td>
								<span class=\"text-primary\">".$proyecto['nombre']."</span>
							</td>
							<td>
								<label class=\"switch switch-primary\">
									<input type=\"checkbox\" checked=\"\" /><span></span>
								</label>
							</td>
						</tr>
						<!-- Section JS of admin clientes -->
						<script>
							app.navegarA({buttons:[
								{
									//supervisión
									idComponente:'irRoadmap',
									url:'src/roadmap'
								},
								{
									idComponente:'irAntecedentesp',
									url:'src/antecedentesp'
								},
								{
									idComponente:'irAseguramiento',
									url:'src/aseguramiento'
								},
								{
									idComponente:'irInventario',
									url:'src/inventario'
								},
								{
									idComponente:'irValidaciones',
									url:'src/validaciones'
								},
								{
									idComponente:'irTablero',
									url:'src/tablero'
								}
							]});
						</script>
						";
		}

		echo $html;
	}	
?>
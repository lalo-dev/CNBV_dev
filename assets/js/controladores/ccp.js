$(document).ready(function() {
	//Sección clientes
	listaClientes();

	//Sección contratos
	
	//Sección proyectos
});

//Sección clientes 				###################################################################################
function totalClientes() {
	var vDatos = 'acc=totalClientes';
	var vUrl = 'assets/php/02Controladores/ccp.php';

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#aTotalClientes').text('').text(vRes);
	});
}

function listaClientes() {
	var vDatos = 'acc=listaClientes';
	var vUrl   = 'assets/php/02Controladores/ccp.php';

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#tblClientes > tbody > tr').remove();
		$('#tblClientes > tbody').append(vRes);

		totalClientes();
	});
}

function guardaCliente() {
	var nombre = '&nombre=' + $('#txtNombreCliente').val();
	var rfc    = '&rfc=' + $('#txtRfcCliente').val();
	var rs     = '&rs=' + $('#txtRsCliente').val();
	var giro   = '&giro=' + $('#txtGiroCliente').val();
	var url    = '&url=' + $('#txtUrlCliente').val();
	var nota   = '&nota=' + $('#txtNotaCliente').val();
	var vDatos = 'acc=guardaCliente'+nombre+rfc+rs+giro+url+nota;
	var vUrl   = 'assets/php/02Controladores/ccp.php';

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		if(vRes[0] == 0){
			peticionAjax('acc=ultimoCliente', 'assets/php/02Controladores/ccp.php').done(function(cliente) {
				guardarAreasCliente(cliente);
				guardaTelefonosCliente(cliente);
				guardaDireccionesCliente(cliente);
				guardaContactosCliente(cliente);
				alert("Se ha guardado correctamente el cliente.");
			});
		} else {
			alert("No se guardo el cliente.");
		}
	});
}

function guardarAreasCliente(cliente) {
	$('.areaCliente').each(function(index) {
		var area       = '&area=' + $(this).find('td').eq(0).html();
		var comentario = '&comentario=' + $(this).find('td').eq(1).html()
		var vDatos     = 'acc=guardaAreaCliente&cliente='+cliente+area+comentario;
		var vUrl       = 'assets/php/02Controladores/ccp.php';

		peticionAjax(vDatos, vUrl).done(function(vArea) {
			if(vArea[0] == 1){
				alert("No se pudo guardar las áreas del cliente.");
			}	
		});
	});
}

function guardaTelefonosCliente(cliente) {
	$('.telefonoCliente').each(function(index) {
		var telefono  = '&telefono=' + $(this).find('td').eq(0).html();
		var extencion = '&extencion=' + escape($(this).find('td').eq(1).html());
		var tipo      = '&tipo=' + $(this).find('td').eq(2).html();
		var vDatos    = 'acc=guardaTelefonoCliente&cliente='+cliente+telefono+extencion+tipo;
		var vUrl      = 'assets/php/02Controladores/ccp.php';

		peticionAjax(vDatos, vUrl).done(function(vTelefono) {
			if (vTelefono[0] == 1) {
				alert("No se pudo guardar los telefonos del cliente.")
			}
		});
	});
}

function guardaDireccionesCliente(cliente) {
	$('.direccionCliente').each(function(index) {
		var calle     = '&calle=' + $(this).find('td').eq(0).html();
		var colonia   = '&colonia=' + $(this).find('td').eq(1).html();
		var municipio = '&municipio=' + $(this).find('td').eq(2).html();
		var ciudad    = '&ciudad=' + $(this).find('td').eq(3).html();
		var estado    = '&estado=' + $(this).find('td').eq(4).html();
		var pais      = '&pais=' + $(this).find('td').eq(5).html();
		var cp        = '&cp=' + $(this).find('td').eq(6).html();
		var vDatos    = 'acc=guardaDireccionCliente&cliente='+cliente+calle+colonia+municipio+ciudad+estado+pais+cp;
		var vUrl      = 'assets/php/02Controladores/ccp.php';

		peticionAjax(vDatos, vUrl).done(function(vDireccion) {
			if (vDireccion[0] == 1) {
				alert("No se pudo guardar los telefonos del cliente.");
			}
		});
	});
}

function guardaContactosCliente(cliente) {
	$('.contactoCliente').each(function(index) {
		var nombre          = '&nombre=' + $(this).find('td').eq(0).html();
		var ap              = '&ap=' + $(this).find('td').eq(1).html();
		var am              = '&am=' + $(this).find('td').eq(2).html();
		var puesto          = '&puesto=' + $(this).find('td').eq(3).html();
		var vDatos          = 'acc=guardaContactoCliente&cliente='+cliente+nombre+ap+am+puesto;
		var vUrl            = 'assets/php/02Controladores/ccp.php';
		var arregloEmail    = [];
		var arregloTelefono = [];
		var ultimoContacto = '';

		$(this).find('.emailContacto').each(function(index) {
			arregloEmail.push($(this).text());
		});

		$(this).find('.telefonoContacto').each(function(index) {
			arregloTelefono.push($(this).text());
		});

		$.when(
			$.ajax({
				data: vDatos,
				type: "POST",
				url: vUrl
			})
		).done(function(data){
			
			//Guardar los email por cada fila de los contactos
			$.each(arregloEmail, function(index, val) {
				//alert('entro a email');
				var email  = '&email=' + val;
				var vDatos = 'acc=guardaEmailContactoCliente&contactoCliente='+data+email;
				var vUrl   = 'assets/php/02Controladores/ccp.php';

				peticionAjax(vDatos, vUrl).done(function(vEmail) {
					if (vEmail[0] == 1) {
						alert("No se pudo guardar los Emails de contactos del cliente.");
					}
				}); 
			});

			//Guardar los telefonos por cada fila de los contactos
			$.each(arregloTelefono, function(index, val) {
				//alert(val);
				//alert('entro al telefono');
				var conjunto = val;
				conjunto = conjunto.split('~');
				//alert(conjunto[0]);

				var telefono  = '&telefono=' + conjunto[0];
				var extencion = '&extencion=' + conjunto[1];
				var tipo      = '&tipo=' + conjunto[2];
				var vDatos    = 'acc=guardaTelefonoContactoCliente&contactoCliente='+data+telefono+extencion+tipo;
				var vUrl      = 'assets/php/02Controladores/ccp.php';

				peticionAjax(vDatos, vUrl).done(function(vTelefono) {
					if (vTelefono[0] == 1) {
						alert("No se pudo guardar los telefonos de contactos del cliente.");
					}
				});
			});
			
		});
		
	});	
}

function agregarTrArea() {
	var nombre     = $('#txtAreaCliente').val();
	var comentario = $('#txtComentarioAreaCliente').val();
	var tr         = '';
	
	tr += '<tr class="areaCliente">';
	tr +=	'<td>'+ nombre +'</td>';
	tr +=	'<td>'+ comentario +'</td>';
	tr +=	'<td class="text-center">';
	tr +=   '<div class="btn-group btn-group-xs">';
	tr +=		'<a href="javascript:void(0)" data-toggle="tooltip" title="Detalle" class="btn btn-primary"><i class="gi gi-pencil"></i></a>';
	tr +=	'</div>';
	tr +=	'</td>';
	tr +=	'<td class="text-center">';
	tr +=		'<div class="btn-group btn-group-xs">';
	tr +=			'<a href="javascript:void(0)" onclick="$(this).parent().parent().parent().remove();" data-toggle="tooltip" title="Detalle" class="btn btn-danger"><i class="gi gi-bin"></i></a>';
	tr +=		'</div>';
	tr +=	'</td>';
	tr += '</tr>';

	$('#tblAreasCliente tbody').append(tr);
}

function agregarTrTelefono() {
	var telefono = $('#txtTelefonoCliente').val();
	var extencion = $('#txtExtencionCliente').val();
	var tipo = $('#slcTipoTelefonoCliente :selected').text();
	var tr = '';

	tr += '<tr class="telefonoCliente">';
	tr += 	'<td>'+ telefono +'</td>';
	tr += 	'<td>'+ extencion +'</td>';
	tr += 	'<td>'+ tipo +'</td>';
	tr +=   '<td class="text-center">';
	tr +=       '<div class="btn-group btn-group-xs">';
	tr +=           '<a href="javascript:void(0)" data-toggle="tooltip" title="Detalle" class="btn btn-primary"><i class="gi gi-pencil"></i></a>';
	tr +=       '</div>';
	tr +=   '</td>';
	tr +=   '<td class="text-center">';
	tr +=       '<div class="btn-group btn-group-xs">';
	tr += 			'<a href="javascript:void(0)" data-toggle="tooltip" title="Detalle" class="btn btn-danger" onclick="$(this).parent().parent().parent().remove();"><i class="gi gi-bin"></i></a>';
	tr += 		'</div>';
	tr += 	'</td>';
	tr += '</tr>';

	$('#tblTelefonosCliente tbody').append(tr);
}

function agregaTrDireccion() {
	var calle = $('#txtCalleCliente').val();
	var colonia = $('#txtColoniaCliente').val();
	var delegacion = $('#txtDelegacionCliente').val();
	var ciudad = $('#txtCiudadCliente').val();
	var estado = $('#slcEstadoCliente :selected').text();
	var pais = $('#slcPaisCliente :selected').text();
	var cp = $('#txtCpCliente').val();
	var tr = '';

	tr += '<tr class="direccionCliente">';
	tr +=	'<td>'+ calle +'</td>';
	tr +=	'<td>'+ colonia +'</td>';
	tr +=	'<td>'+ delegacion+'</td>';
	tr +=	'<td>'+ ciudad +'</td>';
	tr +=	'<td>'+ estado +'</td>';
	tr +=	'<td>'+ pais +'</td>';
	tr +=	'<td>'+ cp +'</td>';
	tr +=	'<td class="text-center">';
	tr +=		'<div class="btn-group btn-group-xs">';
	tr +=			'<a href="javascript:void(0)" data-toggle="tooltip" title="Detalle" class="btn btn-primary"><i class="gi gi-pencil"></i></a>';
	tr +=		'</div>';
	tr +=	'</td>';
	tr +=	'<td class="text-center">';
	tr +=		'<div class="btn-group btn-group-xs">';
	tr +=			'<a href="javascript:void(0)" data-toggle="tooltip" title="Detalle" class="btn btn-danger" onclick="$(this).parent().parent().parent().remove();"><i class="gi gi-bin"></i></a>';
	tr +=		'</div>';
	tr +=	'</td>';
	tr += '</tr>';

	$('#tblDireccionCliente tbody').append(tr);	
}

function agregarTrEmail() {
	var seleccion = $('# :selected').val();
	var email = $('#').val();
	var telefono = $('#').val();
	var extencion = $('#').val();
	var tipo = $('# :selected').text();
}

//Sección contratos            ###################################################################################
function totalContratos(cliente) {
	var vDatos = 'acc=totalContratos';
	var vUrl = 'assets/php/02Controladores/ccp.php?cliente='+cliente;

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#aTotalContratos').text('').text(vRes);
	});
}

function listaContratos(cliente) {
	var vDatos = 'acc=listaContratos';
	var vUrl = 'assets/php/02Controladores/ccp.php?cliente='+cliente;

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#tblContratos > tbody > tr').remove();
		$('#tblContratos > tbody').append(vRes);

		totalContratos(cliente);
	});
}

//Sección proyectos           ###################################################################################
function totalProyectos(contrato) {
	var vDatos = 'acc=totalProyectos';
	var vUrl = 'assets/php/02Controladores/ccp.php?contrato='+contrato;

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#aTotalProyectos').text('').text(vRes);
	});
}

function listaProyectos(contrato) {
	var vDatos = 'acc=listaProyectos';
	var vUrl = 'assets/php/02Controladores/ccp.php?contrato='+contrato;

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#tblProyectos > tbody > tr').remove();
		$('#tblProyectos > tbody').append(vRes);

		totalProyectos(contrato);
	});
}
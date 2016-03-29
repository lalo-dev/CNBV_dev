$(document).ready(function() {
	//Sección clientes
	listaPats();

	//Sección contratos
	
	//Sección proyectos
});
//Sección PATS 				###################################################################################
function listaPats() {
	var vDatos = 'acc=listaPats';
	var vUrl   = '../../assets/php/controladores/pats.php';

	peticionAjax(vDatos, vUrl).done(function(vRes) {
		$('#tblPats > tbody > tr').remove();
		$('#tblPats > tbody').append(vRes);

		//totalClientes();
	});
}
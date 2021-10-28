$(function(){

console.log("Jquery esta funcionando");
cargar_datos();
});

//fin de funtion
function mostrar_cargando(titulo,mensaje=""){
	Swal.fire({
	  title: titulo,
	  html: mensaje,
	  timer: 2000,
	  timerProgressBar: true,
	  didOpen: () => {
	    Swal.showLoading()
	     
	  },
	  willClose: () => {
	     
	  }
	}).then((result) => {
	  /* Read more about handling dismissals below */
	  if (result.dismiss === Swal.DismissReason.timer) {
	    console.log('I was closed by the timer')
	  }
	})
}

	function cargar_datos(){
	mostrar_cargando("Procesando solicitud","Espere mientras se obtiene la información")
	var datos = {"consultar_datos":"si_consultalos"};
	console.log("hasta aqui llego",datos);
	$.ajax({
		dataType:"json",
		method:"POST",
		url:"../../controllers/consultas_json/json_22.php",
		data:datos

	}).done(function(json){

		Swal.close();
		console.log("datos consuldos: ",json);
		if (json[0]=="Exito") {
			$("#aqui_tabla").empty().html(json[1]);
			$('#tb_con22').DataTable();
			
		}

	}).fail(function(){
		console.log("Error :c");

	}).always(function(){

	})





}
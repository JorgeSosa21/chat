$(function(){
	envioPost("chat=true", function(respuesta){
		ultimoMSG(respuesta);
	});
});

function mostrarConve(user){
	envioPost("id="+user.id, function(respuesta){
		var mensaje = '';
		
		for(var i = 0; i < respuesta.length; i++){
			mensaje += '<div class="renglon">'+
							'<div class="mensaje">'+
								'<span>'+respuesta[i].MENSAJE+'</span>'+
								'<span>'+respuesta[i].HORA+'</span>'+
							'</div>'+
						'</div>';
			$(".mensajes").html(mensaje);
		}
		
		console.log($(".mensajes").scrollTop($(".mensajes")[0].scrollHeight));
	});
};

function ultimoMSG(data){
	for (var i = 0; i < data.length; i++)
		$("#"+data[i].TIPO+" .ultimo-msg span i").html(data[i].MENSAJE);
};

function envioPost(data, respuesta){
	$.ajax({
		type: "POST",
		dataType: "json",
		url: 'data.php',
		data: data,
		success: function(data, status, xhr) {
		   respuesta(data); 
		},
	});
}
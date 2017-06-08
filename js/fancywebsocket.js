$(function() {
	Server = new FancyWebSocket('ws://127.0.0.1:1024');
	
    Server.bind('open', function(){
		
    });
	
    Server.bind('close', function(data) {
		
    });
	
    Server.bind('message', function(payload) {
		
    });
	
    Server.connect();
});

var FancyWebSocket = function(url){
	var callbacks = {};
	var ws_url = url;
	var conn;
	
	this.bind = function(event_name, callback){
		callbacks[event_name] = callbacks[event_name] || [];
		callbacks[event_name].push(callback);
		return this;
	};
	
	this.send = function(event_name, event_data){
		this.conn.send(event_data);
		return this;
	};
	
	this.connect = function() {
		if (typeof(MozWebSocket) == 'function')
			this.conn = new MozWebSocket(url);
		else
			this.conn = new WebSocket(url);
		
		this.conn.onmessage = function(evt){
			dispatch('message', evt.data);
		};
		
		this.conn.onclose = function(){dispatch('close', null)}
		this.conn.onopen = function(){dispatch('open', null)}
	};
	
	this.disconnect = function(){
		this.conn.close();
	};
	
	var dispatch = function(event_name, message){
		if(message == null || message == ""){
			
		}else{
			var JSONdata = JSON.parse(message);
			actualiza_mensaje(message);				
		}
	}
};

function send(text) {
    Server.send('message', text);
};

function actualiza_mensaje(message){
	var data = JSON.parse(message);
	var tipo = data[0].tipo;
	var mensaje = data[0].mensaje;
	var fecha = data[0].fecha;
	
	if(data[0].escribiendo === 1){
		var ultimoMsg = $("#"+tipo+" .ultimo-msg span i").html();
		$("#"+tipo+" .ultimo-msg span").html("<i class='escribiendo'>Escribiendo...</i>");
		setTimeout(function(){$("#"+tipo+" .ultimo-msg span i").html(ultimoMsg);},700);
	}else{		
		var contenidoDiv  = $(".mensajes").html();
		var mensajeR   = '<div class="renglon">'+
							'<div class="mensaje">'+
								'<span>'+mensaje+'</span>'+
								'<span>'+fecha+'</span>'+
							'</div>'+
						'</div>';		
		$(".mensajes").html(contenidoDiv+mensajeR);
		$("#"+tipo+" .ultimo-msg span i").html(mensaje);
		console.log($(".mensajes").scrollTop($(".mensajes")[0].scrollHeight));
	}
}

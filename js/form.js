$(document).ready(function(){
	$(".boton").click(function() {
		
		var nombre = $("#nombre").val();
			email = $("#email").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			mensaje = $("#asunto").val();
			mensaje = $("#mensaje").val();
		
		if (nombre == "") {
		    $("#nombre").focus();
		    return false;

		}else if(email == "" || !validacion_email.test(email)){
		    $("#email").focus();	
		    return false;
		}else if(asunto == ""){
		    $("#asunto").focus();
		    return false;
		}else if(mensaje == ""){
		    $("#mensaje").focus();
		    return false;
		}else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'nombre='+ nombre + 
						'&email=' + email + 
						'&asunto=' + asunto + 
						'&mensaje=' + mensaje;
			$.ajax({
	    		type: "POST",
	    		url: "http://localhost/losCholos/wp-content/themes/vatoLoco/general/proceso.php",
	    		data: datos,
	    		success: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('enviado!').addClass('msg_ok').animate({ 'left' : '135px' }, 300);	
	    		},
				error: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'left' : '135px' }, 300);					
				}
	   		});
	 		return false;	
		}
	});
});
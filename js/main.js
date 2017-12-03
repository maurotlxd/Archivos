$(document).ready(function(){
	$(function(){
		$("td[contenteditable=true]").blur(function(){			
			var field_id=$(this).attr("id");
			var value=$(this).text();			
			console.log('value: '+value+' field:'+field_id);
			$.post('php/<modi></modi>ficarpaciente.php', field_id+"="+value,function(data){	
				if(data!=''){
					console.log(data);
					
					if (data=="dni"){
						window.location.reload(true);
						alert('El dni ya existe');						
					}
				}		
			});
		});		
		
		$("button[button=true]").click(function(){
			if (confirm("esta seguro")) {
			var field_id=$(this).attr("id");
			console.log('id:'+field_id);			
			$.post('php/eleminaradmin.php', {id: field_id},function(respuesta){
				if (respuesta=="true")
 				    window.location.reload(true);
 			else
 				alert(respuesta);
			});				
		}
		});		
	});	
	$("select").change(function() {			
            var field_id=$(this).attr("name");
			var value=$(this).val();	
			console.log('value: '+value+' field:'+field_id);
			$.post('php/modificardoctorcita.php', field_id+"="+value,function(data){
				if(data!=''){
					console.log(data);
				}
			});			
        });
	$("td[button=false]").click(function(){
		var value=$(this).attr("name");
		console.log('value: '+value);
		$.post('php/consultardatos.php',value,function(respuesta){	
				if (respuesta=="true")
 				window.location.href = "moverpaciente.php";
 			else
 				alert(respuesta);	
			});			
		});

	$('h2').animate({
opacity:'1'
},1500)
});
function Registraradministrador(){	
	
		$.post('php/agregaradministrador.php','&'+$("#frmadministrador").serialize(),function(respuesta){
 			if (respuesta=="true"){
 				window.location.reload(true);
 			}
			   else{
 				alert(respuesta);
 			}
			   });			   
	}

function Registrardoctor(){	

	
		$.post('php/agregardoctor.php','&'+$("#frmdoctor").serialize(),function(respuesta){
 		if (respuesta=="true"){
 				window.location.reload(true);
 			}
			   else{
 				alert(respuesta);
 			}
			   });			   
	}

function Registrarpaciente(){	
	
		$.post('php/agregarpaciente.php','&'+$("#frmpaciente").serialize(),function(respuesta){
 			if (respuesta=="true"){
 				window.location.reload(true);
 			}
			   else{
 				console.log(respuesta);
 			}
			   });			   
	}



function iniciarsesion(){
	$.post('php/iniciarsesion.php','&'+$("#iniciar").serialize(),function(respuesta){		
 			if (respuesta=="admin"){
 				window.location.href = "frmadmin.php";	
			}else if(respuesta=="doctor"){
 				window.location.href = "frmdoctor.php";
			}else{
				if(respuesta=="usuario"){
				window.location.href = "frmusuario.php";
				}else{
					$('.alerta').html(alertify.error(respuesta));
			}
		}
			
 		});
		}
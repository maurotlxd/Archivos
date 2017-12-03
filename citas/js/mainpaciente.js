$(document).ready(function(){
	$(function(){
		$("td[contenteditable=true]").blur(function(){			
			var field_id=$(this).attr("id");
			var value=$(this).text();			
			console.log('value: '+value+' field:'+field_id);
			$.post('php/modificarpaciente.php', field_id+"="+value,function(data){	
				if(data!=''){
					console.log(data);
				}		
			});
		});		
		
		$("button[button=true]").click(function(){
			if (confirm("esta seguro")) {
			var field_id=$(this).attr("id");
			console.log('id:'+field_id);			
			$.post('php/eliminarpaciente.php', {field_id},function(respuesta){
				if (respuesta=="true"){
 				window.location.reload(true);
 			}
 			else{
 				alert(respuesta);
 			}
			});		 		
		}
		});		
	});	
});
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


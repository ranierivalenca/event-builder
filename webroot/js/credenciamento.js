$(document).ready(function() {
	$(document).on('click', '.credclass', function(event){
		event.preventDefault();
		var userid = jQuery(this).attr("id").replace('_cred','');
		pendding = true;
		if (confirm('Credenciar Nº'+userid+' - '+jQuery(this).attr("name")+' ?')){
			
			console.log("User ID "+userid);
			$.get( "credenciarajax/"+userid, function(data) {
				$("#"+userid+"_td_cred").load("credenciamento #"+userid+'_cred');				
				} );	 
		}
		});
	$(document).on('click', '.certclass', function(event){
		event.preventDefault();
		var userid = jQuery(this).attr("id").replace('_cert','');
		pendding = true;
		if (confirm('Imprimir certificado Nº'+userid+' - '+jQuery(this).attr("name")+' ?')){
			
			console.log("User ID "+userid);
			$.get( "imprimircertajax/"+userid, function(data) {
				$("#"+userid+"_td_cert").load("credenciamento #"+userid+'_cert');				
				} );	 
		}
		});	
	
	});
var pendding = false;
jQuery(function ($){
	$(document).ajaxStart(function(){
		pendding = true;
        $("#ajax_loader").show();
    }); 
	$(document).ajaxStop(function(){
        $("#ajax_loader").hide();
        pendding = false;
     });
        
});

setInterval(function(){
	if(!pendding) $("#tablebody").load("credenciamento .linha");
}, 60000);
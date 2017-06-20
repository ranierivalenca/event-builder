	$(document).ready(function() {
	$(document).on('click', '.credclass', function(event){
		event.preventDefault();
		var userid = jQuery(this).attr("id").replace('_cred','');
		pendding = true;
		if (confirm('Credenciar Nº'+userid+' - '+jQuery(this).attr("name")+' ?')){
			
			console.log("User ID "+userid);
			$.get( "checkinajax/"+userid+'', function(data) {
				$("#"+userid+"_td_cred").load("checkin #"+userid+'_cred');				
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
	if(!pendding) $("#tablebody").load("checkin .linha");
}, 60000);
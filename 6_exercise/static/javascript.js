$(document).ready(function(){
$('#username').keyup(username_check);
});
	
function username_check(){	
var username = $('#username').val();
if(username == "" || username.length < 4){
$('#username').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "check.php",
   data: 'username='+ username,
   cache: false,
   success: function(response){
if(response == 1){
	$('#username').css('border', '3px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}else{
	$('#username').css('border', '3px #090 solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}



}
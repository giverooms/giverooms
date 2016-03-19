$(document).ready(function(){
	$('.repassword').focusout(function(){
		check_pass_match();
	});
});

function check_pass_match(){

	var $pass = $(".password").val();
	var $repass = $(".repassword").val();
	
	if($pass == $repass){
		$("#pass_confirm").show();
	}

	else{
		$("#pass_error").show();
	}

}
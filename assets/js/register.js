$(document).ready(function(){

	//Show registerForm
	$("#hideLogin").click(function(){
		$("#loginForm").hide();
		$("#registerForm").show();
	});

	//Show LoginForm
	$("#hideRegister").click(function(){
		$("#loginForm").show();
		$("#registerForm").hide();
	});
});
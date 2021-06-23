$(document).ready(function(){
	$('#Login').click(function(e){
		e.preventDefault();
		var user=$('#user').val();
		var pass=$('#Password').val();

		$.ajax({
					"url":"PHP/Login/login.php",
					"method":"POST",
					"data":{user:user,
					Password:pass},
					success:function(rep)
					{
						var Res=JSON.parse(rep);
						if(Res.length==0)
						{
							alert('Email ou mot de passe incorrect');
						}
						else
						{
							//alert('Ok');
							window.location.href = "html/index.php";
						}
						

					}
				});
	})
})
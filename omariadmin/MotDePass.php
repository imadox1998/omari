<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Connection</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
        body {
        color: #999;
        background: #f5f5f5;
        font-family: 'Varela Round', sans-serif;
    }
    .form-control {
        box-shadow: none;
        border-color: #ddd;
    }
    .form-control:focus {
        border-color: #4aba70; 
    }
    .login-form {
        width: 350px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .login-form form {
        color: #434343;
        border-radius: 1px;
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h4 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 20px;
    }
    .login-form .avatar {
        
        margin-left: 18px;
        text-align: center;
        width: 100px;
        height: 100px;
        padding: 15px;
        
    }
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
    .login-form .form-control, .login-form .btn {
        min-height: 40px;
        border-radius: 2px; 
        transition: all 0.5s;
    }
    .login-form .close {
        position: absolute;
        top: 15px;
        right: 15px;
    }
    .login-form .btn {
        background: #c0d56d;
        border: none;
        line-height: normal;
    }
    .login-form .btn:hover, .login-form .btn:focus {
        background: #42ae68;
    }
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #c0d56d;
    }
</style>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="/examples/actions/confirmation.php" method="post">
		<div class="avatar"><img src="images/logo.png" style="height: 50px;"></div>
    	<h4 class="modal-title">Donner votre email pour revevoir le code</h4>
        <div class="form-group">
            <input type="text" id="Email" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="text" id="Code" class="form-control" placeholder="Donner le code" required="required" style="display: none;">
        </div>
        <div class="form-group small clearfix">
            
        
        </div> 
        <input type="button" id="Send" class="btn btn-primary btn-block btn-lg" value="Send code
">              
        <input type="button" id="CodeB" class="btn btn-primary btn-block btn-lg" value="Confirmer
" style="display: none;">              
    </form>			
    
</div>
</body>
<script type="text/javascript">
var baseE ;
    $(document).ready(function(){
            $('#Send').click(function(){

                

                var email = $('#Email').val();

                $.ajax({
                 "url":"PHP/Login/Code.php",
                 "method":"POST",
                 "data":{email:email},
                  success:function(rep1)
                  {
                    //alert(rep1);
                    if(rep1=='1')
                    {
                        alert('Email introuvable');
                    }
                    else
                    {
                        $('#CodeB').css("display", "block");
                        $('#Code').css("display", "block");
                        $('#Send').css("display", "none");
                        $('#Email').css("display", "none");
                        baseE = email ;
                    }
                  }
              });
        });
        $('#CodeB').click(function(){

                

                var code = $('#Code').val();

                $.ajax({
                 "url":"PHP/Login/CodeConf.php",
                 "method":"POST",
                 "data":{email:baseE,
                        code:code},
                  success:function(rep1)
                  {
                    var Res=JSON.parse(rep1);
                        if(Res.length==0)
                        {
                            alert('code incorrect');
                        }
                        else
                        {
                            //alert('Ok');
                            window.location.href = "confirmation.php?Em="+baseE;
                        }
                    
                  }
              });
        });
    });
</script>
</html>       
  
  
  
  
  
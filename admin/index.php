<!DOCTYPE html>
<html lang='en' class=''>
<head>
    <title>Bravolyuks</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta name="theme-color" content="#313131" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
    .wrapper {    
    	margin-top: 80px;
    	margin-bottom: 20px;
    }

    .form-signin {
        max-width: 420px;
        padding: 20px 38px 10px;
        margin: 0 auto;
        background-color: #eee;  
    }

    .form-signin-heading {
        text-align:center;
        margin-bottom: 30px;
    }

    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
    }

    input[type="text"] {
        margin-bottom: 0px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    input[type="password"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .colorgraph {
        height: 7px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }

    </style>

</head>

<body>

<div class = "container">
	<div class="wrapper">
		<form method="POST" class="login form-signin">       
		    <h3 class="form-signin-heading" style="padding:0;margin-bottom:10px;margin-top:0px;"> KHOREZMTEX</h3>
		    <h3 class="form-signin-heading" style="font-size:20px;font-weight:normal;padding:0;margin:0">ADMIN PANEL</h3>
			  <hr class="colorgraph">
			  <input type="text" class="form-control mb-4" id="username" name="Username" placeholder="Login" required="" autofocus="" />
        
			  <input type="password" class="form-control" id="password" name="Password" placeholder="Parol" required=""/>     		  
			  <button class="btn btn-primary btn-block submit_button" style="margin-top:-10px"  name="Submit" value="Login" type="Submit">Войти</button>  			
            <br />
            <h5 style="text-align:center; color:red; display:none; margin-bottom:15px;" class="error_alert">Login yoki parolda xatolik bor !</h5>
		</form>
    
	</div>
</div>

</body>


<script type="text/javascript">

    $('.login').submit(function() {
        checkLogin();
    });

    $('.login').submit(function() {
        return false;
    });

    function checkLogin()
    {

        $.ajax({
            url: "checkuser.php",
            type: "POST",
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function(response)
            {
                alert(response);
                if(response == 'True')
                {
                    window.location.href = 'main.php';
                }
                else
                {
                    $(".error_alert").fadeIn(500);
                    setTimeout(function(){
                      $(".error_alert").fadeOut(500);
                    },2500);
                }
            }
        });
    }

</script>

</html>
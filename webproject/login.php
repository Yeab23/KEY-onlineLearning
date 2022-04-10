<!DOCTYPE html>
<html>
<head>
	<title>KEY-Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        function login(){
            window.location= "home.php";
        }
    </script>
</head>
<body>
  
    <?php include 'navbar.php' ?>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			
		</div>
		<div class="login-content">
			<form action="home.php">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" >
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="button" class="btn" value="Login" onclick="login()">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

    <?php include 'footer.php' ?>
</body>
</html>
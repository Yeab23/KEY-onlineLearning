<!DOCTYPE html>
<html>
<head>
	<title>KEY-Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    form div{
        color:white;
    }
    .container form div{
        padding: 5px;
    }
</style>
    <script>
        function register(){
            alert('registration successfull please login.');
            window.location= "login.html";
        }
    </script>
</head>
<body>
  
    <?php include 'navbar.php' ?>
	<img class="wave" src="img/wave.png">
	<div class="container" style="width: 40%; padding: 5px">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html" style="background-color: rgb(213, 237, 238); opacity: 0.5;">
				<img src="img/avatar.svg">
				
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Full name</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
                   <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>email</h5>
                            <input type="text" class="input">
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>phone no</h5>
                            <input type="number" class="input" style=" opacity: 0.5;">
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>username</h5>
                            <input type="text" class="input">
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>profile pic</h5>
                            <input type="file" class="input">
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>password</h5>
                            <input type="password" class="input">
                    </div>
                 </div>
                </div>
                <a href="login.html">Already have account?</a>
            	<input type="button" class="btn" value="Login" onclick="register()">
               </form>
        </div>
    </div> </div>
    <script type="text/javascript" src="js/main.js"></script>
<?php include 'footer.php' ?>
</body>
</html>
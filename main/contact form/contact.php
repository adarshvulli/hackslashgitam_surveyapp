<?php

$db=new mysqli("localhost","root","zap","survey");
if(isset($_POST['cfs'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
   

    $q=$db->query("INSERT INTO `contactform`(`id`,`name`,`email`,`message`) VALUES ('','$name','$email','$message')");
    if($q>0){
        header("Location:cformsuccess.php");
    }
    else{
        echo 'error occured!';
    }
    
   
}

 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>


    
    <div class="bg-contact100">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <div class="contact100-pic js-tilt" data-tilt>
                    <img src="images/cont1.svg" alt="IMG" style="height: 250px; width: 560px;">
                </div>

                <form class="contact100-form validate-form" action="" method="post">
                    <span class="contact100-form-title" style="font-family: 'Roboto Condensed', sans-serif;">
					<h1 style="color:white; font-family: 'Roboto Condensed', sans-serif;">Get in touch</h1>	
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <textarea class="input100" name="message" placeholder="Message"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <input type="submit" class="contact100-form-btn" value="Send" name="cfs" style="color:aqua;">
                        </input>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.4
        })
    </script>





</body>

</html>
<style>
    body {
        
        color: azure;
    }
</style>
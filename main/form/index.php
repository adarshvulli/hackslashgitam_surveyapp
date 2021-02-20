<?php

$db=new mysqli("localhost","root","zap","survey");
if(isset($_POST['sf'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];
    $q7=$_POST['q7'];
   

    $q=$db->query("INSERT INTO `surveyform`(`id`,`uname`,`email`,`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`) VALUES ('','$uname','$email','$q1','$q2','$q3','$q4','$q5','$q6','$q7')");
    if($q>0){
       
    }
    else{
        echo 'error occured!';
    }
    $to_email = "srivalli@gmail.com";
    $subject = "Thanks for filling the Survey Form";
    
    $headers = "From: srivarun.k2000@gmail.com";
    
    $message="
    
    <html>
    <body>
    <table>
    <tbody>

    <tr>
    <td>Username</td>
    <td>$uname</td>
    </tr>

    <tr>
    <td>Email</td>
    <td>$email</td>
    </tr>

    <tr>
    <td>Response 1</td>
    <td>$q1</td>
    </tr>
    <tr>
    <td>Response 2</td>
    <td>$q2</td>
    </tr>
    <tr>
    <td>Response 3</td>
    <td>$q3</td>
    </tr>
    <tr>
    <td>Response 4</td>
    <td>$q4</td>
    </tr>
    <tr>
    <td>Response 5</td>
    <td>$q5</td>
    </tr>
    <tr>
    <td>Response 6</td>
    <td>$q6</td>
    </tr>
    <tr>
    <td>Response 7</td>
    <td>$q7</td>
    </tr>
    </tbody>
    </table>
    </body>
    </html>
    ";
    
    $header="MIME=Version: 1.0" . "\r\n";
    $header .="Content=type:text/html;charset=UTF-8" . "\r\n";
    
    
    
    
    
    
    
    "




    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
   
}


 
?>



<!DOCTYPE html>
<html>

<head>
    <title>Survey Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="container">
        <div class="img">
            <img src="img/undraw_work_from_anywhere_7sdx.svg">
        </div>
        <div class="login-content">
            <form action="index.php" method="post">
                <img src="img/undraw_fill_forms_yltj.svg">
                <h2>SURVEY FORM</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="uname">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" class="input" name="email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>Your first impression about our company?</h5>
                        <input type="textbox" class="input" name="q1">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>Do you find our work force technically sound?</h5>
                        <input type="textbox" class="input" name="q2">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>Does our work force have good communication skills?</h5>
                        <input type="textbox" class="input" name="q3">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>How do you find the quality of service provided?</h5>
                        <input type="textbox" class="input" name="q4">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>Are you kept updated about our company’s current happenings?</h5>
                        <input type="textbox" class="input" name="q5">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>Complaints (If Any)</h5>
                        <input type="textbox" class="input" name="q6">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                    </div>
                    <div class="div">
                        <h5>Final Comments (If Any)</h5>
                        <input type="textbox" class="input" name="q7">
                    </div>
                </div>






                <input type="submit" class="btn" name="sf">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<?php

$db=new mysqli("localhost","root","zap","survey");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
   

    $q=$db->query("INSERT INTO `contact`(`name`,`email`,`message`) VALUES (?,?,?)");
    if($q>0){
        header("cformsuccess.php");
    }
    
   
}

 
?>
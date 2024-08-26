<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h5>register</h5>
<form action="" method="POST">

    <div>
    <label for="">username</label>
    <input type="text" name="username" id="">
    </div>
    <div>
    <div>
    <label for="">email</label>
    <input type="text" name="email" id="">
    </div>
    <div>
    <label for="">Password</label>
    <input type="password" name="password" id="">
    </div>

    <button type="submit"  name="register">register</button>


</form>
<?php 

if(isset($_POST['register'])){

$_SESSION["users"][""] = ["username"=>$_POST['username'],"password"=> $_POST["password"],"email"=>$_POST['email']];

header("location:login.php");

}


?>
    
</body>
</html>
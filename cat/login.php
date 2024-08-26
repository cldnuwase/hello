<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Login</h2>

<form action="" method="POST">

<div>
<label for="">email</label>
<input type="text" name="email" id="">
</div>

<div>
<label for="">password</label>
<input type="password" name="password" id="">

</div>
<button type="submit" name="login">Login</button>
</form>

<?php 

if(isset($_POST['login'])){

if(in_array($_POST["email"],$_SESSION["users"]) && in_array($_POST['password'],$_SESSION['users'])){
    $_SESSION["email"] = $_POST["email"];
 header('location: add-item.php');
}
else{
    echo "invalid credetials";
    print_r($_SESSION['users']);
}

}



?>

    
</body>
</html>
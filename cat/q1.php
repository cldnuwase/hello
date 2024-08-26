<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    $err = [];

if(isset($_POST["submit"])){




    if(empty($_POST["username"])){

        $err["username"][""]= "username is required"; 
        
    }
    else{

        if(!preg_match("/^[a-zA-Z\s]+$/",$_POST['username'])){
            $err["username"][""]= "Only alphanumberic allowed"; 
        }


    }

//    echo  print_r($err);
if(empty($_POST["password"])){

    
    $err["password"][""]= "password is required"; 

}
else{

    if(strlen($_POST["password"]) < 8){
    

        $err["password"][""]= "password must have at least 8 characters"; 
    
    
    }

}
if(empty($_POST['email'] )){
    $err["email"][""]= "email is required"; 
}
else{

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

        $err["email"][""]= "please enter a correct email"; 
    
    }
    
}

if(empty($_POST['age'])){
    $err['age']['']= 'age is required';
}
else{
    if(is_numeric($_POST['age'])){
        $err['age']['']="Only numberic allowed";
}
if(!($_POST['age']>=18 && $_POST['age']<=100) ){
    $err['age']['']="unreasonable range of age";
}


}

if(empty($_POST['gender'])){

$err['gender']['']= 'gender is required';

}

}





?>
    

<form action="" method="POST">
    <div>
    <label for="">Username</label>
    <input type="text" name="username" id="">
    <div><?php
     if(!empty($err["username"])){
        foreach($err["username"] as $item){
echo "<b style='color:red'><br>".$item."</b>";
        }
     } 
     ?>
     </div>
    </div>
    <div>
    <label for="">Password</label>
    <input type="password" name="password" id="">
    <div><?php
     if(!empty($err["password"])){
        foreach($err["password"] as $item){
echo "<b style='color:red'><br>".$item."</b>";
        }
     } 
     ?>
     </div>
    </div>
    <div>
    <label for="">Email</label>
    <input type="text" name="email" id="">
    <div><?php
     if(!empty($err["email"])){
        foreach($err["email"] as $item){
echo "<b style='color:red'><br>".$item."</b>";
        }
     } 
     ?>
     </div>
    </div>
    <div>
    <label for="">Age</label>
    <input type="number" name="age" id="">
    <div>
        <?php
     if(!empty($err["age"])){
        foreach($err["age"] as $item){
echo "<br><b style='color:red'>".$item."</b>";
        }
     } 
     ?>
     </div>
    </div>
    <div>
        <label for="">Gender</label>

    <label for="male">Male</label> 
    <input type="radio" name="gender" id="" value="male">
    
    <label for="female">Female</label> 
    <input type="radio" name="gender" id="" value="male">
    <?php
     if(!empty($err["age"])){
        foreach($err["age"] as $item){
echo "<br><b style='color:red'>".$item."</b>";
        }
     } 
     ?>
    </div>

    <input type="submit" value="submit" name="submit">

</form>



</body>
</html>

<!-- <script>
3. Login and purchase order 

after a successfully validating and submitting the registraction
create a purchase order form that 
t-shirts 23.000FRW - allows the users to select multiple items  from a list of available product. the product list should include 
shoes - 35,000 Frw - you can allow the user to input the number of products e.g 3

Ensure the purchase order form include : 

product list :  Display a list products user can select from
quantity: option to specify the quantity of each select product
submit buttonL to complete the purchase
</script> -->
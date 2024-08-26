<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

if(isset($_POST["add"])){

    $qty = $_POST["qty"];
    $item= $_POST["item"];

    $_SESSION["order"][""] = ["item"=>$item,"qty"=> $qty];


}

?>


<form action="" method="post">

<div>
    <label for="">product list</label>
    <select name="item" >
        <option value="">select product</option> 
        <option value="shoes">Shoes - 35,000</option>
        <option value="t-shirt">t-shirt - 23,000</option>
        <option value="socks">socks - 2300</option>
        <option value="sweatshirt">sweatshirt - 4500 </option>
    </select>

    <div>
        <label for="">Enter the quantity</label>
        <input type="number" name="qty" id="">
    </div>


    <!-- <div>
        <label for="">Enter quantities of shoes you want</label>
        <input type="number" name="qty_shoes" id="">
    </div>
    <div>
        <label for="">Enter quantities of t-shirt you want</label>
        <input type="number" name="qty_t_shirt" id="">
    </div>
    <div>
        <label for="">Enter quantities of  socks you want</label>
        <input type="number" name="qty_socks" id="">
    </div>
    <div>
        <label for="">Enter quantities of t-sweatshirt you want</label>
        <input type="number" name="qty_sweatshirt" id="">
    </div> -->


<button type="submit" name="add">Add Item</button>



</div>
</form>

</body>
</html>
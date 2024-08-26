<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Purchase order </h2>
<table>

<thead>
<tr>
        <th>Product</th>
        <th>Item</th>
    </tr>

</thead>

<tbody>
  <?php 

foreach($_SESSION["order"] as $item){
    ?>
    <tr>
        <td><?php echo $item["item"] ?></td>
        <td><?php echo $item["qty"] ?></td>
    </tr>
    <?php 
}


?>
</tbody>

   
    
</table>

<a href="add-item.php">add more</a>
    
</body>
</html>
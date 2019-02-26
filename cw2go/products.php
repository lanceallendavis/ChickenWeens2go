<?php
require('./includes/mysqli_connect.php');
require('./includes/cart.php');
?>
<!doctype html>
<html>
<head>
</head>
<body>
  <table>
    <?php
    if($products_result)
    {
      while($row = mysqli_fetch_array($products_result, MYSQLI_ASSOC)){
        var_dump($row);
        // echo '</td><td>' . $row['name'] . '</td><td>' . $row['type'] . '</td><td>' . $row['description'] . '</td><td>' . $row['price'] . '</td><td>' . $row['availability'] . '</td>';
        // echo "<td><a href='add-to-bag.php?id=".$row['ID']."'>Add To Bag</a></td>";
      }
    }
     ?>
     <form action="./includes/add-to-bag.php" method="post">
       <input type='hidden' name='action' value='addProduct'>
       <input type='hidden' name='action' value='editProduct'>
       <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
       <td><label class="label" for="ID"></label></td>

       <td><input id="submit" type="submit" name="submit" value="Add">
     </form>


</body>
</html

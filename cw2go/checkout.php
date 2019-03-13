<!DOCTYPE html>
<?php
  include('./includes/session-user.php');
  include('./includes/display-cart.php');
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ween's CheckOut</title>
    <link rel="stylesheet" href="userasset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="userasset/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Black+Han+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
<?php include('./includes/header-user.html'); ?>
  <section class="text-center" style="padding-top: 160px;height: 748px;font-size: 18px;padding-left: 90px;">
    <div class="col" style="padding-left: 109px;width: 1172px;">
      <h1 class="text-left shake animated" style="color: rgb(248,157,19);font-family: 'Black Han Sans', sans-serif;font-size: 41px;letter-spacing: 6px;">Checkout Details</h1>
        <div class="table-responsive" style="font-family: Roboto, sans-serif;width: 941px;color: rgb(27,18,15);">
          <table class="table">
            <thead>
              <tr style="line-height: 38px;font-family: Lato, sans-serif;font-weight: bold;">
                <th style="width: 356px;">ORDER</th>
                <th style="width: 323px;">PRICE</th>
                <th style="width: 323px;">QUANTITY</th>
                <th style="width: 323px;">SUBTOTAL</th>
              </tr>
            </thead>
            <tbody>
            <form action="./includes/checkout.inc.php" method="post">
            <input type="hidden" name="action" value="checkout">
            <input type="hidden" name="user_ID" value="<?php echo row['user_ID'] ?>">
            <?php
            while($row = mysqli_fetch_array($display_result, MYSQLI_ASSOC)){

      echo '<input type="hidden" name="user_ID" value="' . $row['user_ID'] . '">';
      echo '<input type="hidden" name="product_ID[]" value="' . $row['product_ID'] . '">';
      echo '<input type="hidden" name="quantity[]" value="' . $row['cart_quantity'] . '">';
      echo '<input type="hidden" name="subtotal[]" value="' . $row['subtotal'] . '">';
      echo '<tr>';
        echo '<td>'. $row['product_name'] . '</td>';
        echo '<td>'. $row['product_price'] . '</td>';
        echo '<td>'. $row['cart_quantity'] . '</td>';
        echo '<td>'. $row['subtotal'] . '</td>';
      echo '</tr>';
          }
          ?>
            </tbody>
          </table>
        </div>
        <div class="table-responsive" style="font-family: Roboto, sans-serif;width: 941px;color: rgb(27,18,15);">
          <table class="table">
            <thead>
              <tr style="line-height: 38px;font-family: Lato, sans-serif;font-weight: bold;">
                <th style="width: 356px;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td class="text-right" style="width: 323px;">Delivery Fee</td>
                <td>P60</td>
              </tr>
              <tr></tr>
              <tr>
                <td></td>
                <td class="text-right" data-bs-hover-animate="shake" style="font-weight: bold;">GRAND TOTAL</td>
                <td data-bs-hover-animate="tada"><?php $total_row = mysqli_fetch_array($display_total_result, MYSQLI_ASSOC); echo $total_row['total']+60; ?></td>
                <input type="hidden" name="total" value="<?php echo $total_row['total']; ?>">
              </tr>
              <tr>
                <td></td>
                <td class="text-right" data-bs-hover-animate="shake" style="font-weight: bold;"></td>
                <td data-bs-hover-animate="tada"><button class="btn btn-primary" type="submit" style="margin-top: 11px;background-color: rgb(246,164,40);">Place Order</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <script src="userasset/js/jquery.min.js"></script>
    <script src="userasset/bootstrap/js/bootstrap.min.js"></script>
    <script src="userasset/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
</body>
</html>

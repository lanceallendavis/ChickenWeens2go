<!DOCTYPE html>
<?php
  include('./includes/session-user.php');
  include('./includes/display-cart.php');
  include('./includes/pre-checkout.inc.php');

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
      <div class="alert alert-success shake animated" role="alert" id="save-sucess" style="background-color: rgba(246, 164, 40, 0.68)!important; border: 1px solid rgb(240, 148, 9); width: 500px; float: right; margin-top: 10px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="icon ion-android-warning mr-1" style="color: rgb(195,151,37);"></i><span style="color:  Black !important;">NOTE: You cannot
        cancel your order upon its placement.<br></span></div>
      <table class="table">
      <h1 class="text-left shake animated" style="color: rgb(248,157,19);font-family: 'Black Han Sans', sans-serif;font-size: 41px;letter-spacing: 6px;">Checkout Details</h1>

        <div class="table-responsive" style="font-family: Roboto, sans-serif;width: 941px;color: rgb(27,18,15);">

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

            if(!is_null($total_row['total'])){

            while($row = mysqli_fetch_array($display_result, MYSQLI_ASSOC)){
            $deduct_to_stocks = $row['pieces'] * $row['cart_quantity'];
      echo '<input type="hidden" name="user_ID" value="' . $row['user_ID'] . '">';
      echo '<input type="hidden" name="product_ID[]" value="' . $row['product_ID'] . '">';
      echo '<input type="hidden" name="quantity[]" value="' . $row['cart_quantity'] . '">';
      echo '<input type="hidden" name="subtotal[]" value="' . $row['subtotal'] . '">';
      echo '<input type="hidden" name="deductToStocks[]" value="' . $deduct_to_stocks . '">';

      echo '<tr>';
        echo '<td>'. $row['product_name'] . '</td>';
        echo '<td>'. $row['product_price'] . '</td>';
        echo '<td>'. $row['cart_quantity'] . '</td>';
        echo '<td>'. $row['subtotal'] . '</td>';
      echo '</tr>';

          }
        }
        else {
          echo '<input type="hidden" name="noProduct" value="noProduct">';
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
                <td class="text-right" style="width: 323px;">Food Total</td>
                <td><input type="hidden" name="estimatedFee" value="<?php echo $total_row['total'];  ?>"><?php echo $total_row['total'];  ?></td>
              </tr>

              <tr>
                <td></td>
                <td class="text-right" style="width: 323px;">Mode of Payment</td>
                <td><input type="hidden" name="modeOfPayment" value="<?php echo $mode_of_payment;  ?>"><?php echo $mode_of_payment;  ?></td>
              </tr>
              <?php if(isset($address_row['city'])){
              echo '<tr>
                <td></td>
                <td class="text-right" style="width: 323px;">Delivery Address</td>
                <td><input type="hidden" name="deliveryAddress" value="'. $address_row['address'] . '">' . $address_row['address'] . '</td>
              </tr>';
              echo '<tr>
                <td></td>
                <td class="text-right" style="width: 323px;">City</td>
                <td><input type="hidden" name="city" value="'. $address_row['city'] . '">' . $address_row['city'] . '</td>
              </tr>';
              echo '<tr>
                <td></td>
                <td class="text-right" style="width: 323px;">Delivery Fee</td>
                <td><input type="hidden" name="estimatedFee" value="'. $address_row['estimated_fee'] . '">' . $address_row['estimated_fee'] . '</td>
              </tr>';
            }

            if(isset($_POST['pickUpTime'])){
              $pick_up_time = date("g:i A", strtotime($_POST['pickUpTime']));
            echo '<tr>
              <td></td>
              <td class="text-right" style="width: 323px;">Delivery Address</td>
              <td><input type="hidden" name="pickUpTime" value="'. $pick_up_time . '">' . $pick_up_time. '</td>
            </tr>';}
            ?>
              <tr>
</tr>
              <tr>
                <td></td>
                <td class="text-right" data-bs-hover-animate="shake" style="font-weight: bold;">TOTAL</td>
                <td data-bs-hover-animate="tada"><?php echo $overall_total; ?></td>
                <input type="hidden" name="total" value="<?php echo $overall_total;  ?>">
              </tr>
              <tr>
                <td></td>
                <td class="text-right" data-bs-hover-animate="shake" style="font-weight: bold;"></td>
                <td data-bs-hover-animate="tada"><button class="btn btn-primary" type="submit" style="margin-top: 11px;background-color: rgb(246,164,40);">Place Order</button></td>
              </tr>
            </tbody>
          </table>
        </form>
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

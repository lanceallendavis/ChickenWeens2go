<?php
//setting header to json
header('Content-Type: application/json');

require('mysqli_connect.php');

//query to get data from the table
$query = sprintf("SELECT DATE(accepted_at) as stock_date, total, SUM(stock_deduction) stocks
                  FROM orders left join order_details on orders.ID = order_details.order_ID
                  WHERE accepted_at >= (CURDATE() - INTERVAL 1 MONTH ) and order_details.product_ID = 57
                  GROUP BY date(stock_date)");

//execute query
$result = mysqli_query($db_connect, $query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $row['stock_date'] = date('l, M-d',strtotime($row['stock_date']));

  $data[] = $row;
}

//free memory associated with result
mysqli_free_result($result);
//close connection
mysqli_close($db_connect);
//now print the data
print json_encode($data);
?>

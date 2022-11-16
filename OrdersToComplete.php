<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Below is code to refresh page every 5 seconds-->
    <meta http-equiv="refresh" content = "5; url = http://localhost/EmpViewOrders/OrdersToComplete.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
         require_once('assets/php/layout/navigation.php');
         require_once('assets/php/functions/getPicture.php');
         echo('<div class = "orders">');
         foreach ($u->getAllCustomerOrders($_SESSION['ID']) as $k => $v) {
         echo('<div class = "order">');
         $pid = $u->getProductIDForPreview($_SESSION['ID'], $v['OrderCode'])['ProductID'];
         $u->makeDelivery($orderCode, $_SESSION['ID'], $_SESSION['ADDRESS'],
          $_POST['deliveryType'], $_SESSION['PAYMENT'];

          //getting the total Price per order
          foreach ($_SESSION['CART'] as $k => $v) {
            $p = $u->getProductByID($k);
            $totalPrice += $v * $p['Price'];
            $u->updateProductStock($k, $v);
            }
            

         echo('<img src = "'. getProductPicture($pid) .'" alt = "Product logo" width =
         "50px" class = "productImage">');
         echo('<a href = "viewOrder.php?code=' . $v['OrderCode'] . '">' . $v['OrderCode'] .
         '</a>');
         echo('<p>Delivery Type: ' . $_POST['deliveryType'] . '</p>');
         echo('<p>Delivery Address: ' . $_SESSION['ADDRESS'] . '</p>');
         echo('<p>Payment Type: ' . $_SESSION['PAYMENT'] . '</p>');
         echo('<p>Amount: '.$v['Price']);
         

         echo('</div>');
         }
         echo('</div>');
         
         if(isset($_POST['submit'])){
            if(!empty($_POST['Driver'])){
                $selected = $_POST['Driver'];
                echo "Driver :".$selected;
            }
         }
        ?>
        <select name = "Driver">
            <option value="Emmanuel">Emmanuel</option>
            <option value="Timothy">Timothy</option>
            <option value="Blessing">Blessing</option>
            <option value="Goodwell">Goodwell</option>
            <option value="Francis">Francis</option>
        </select>
        <input type = "submit" value = "REQUEST" name = "SD">
</body>

</html>
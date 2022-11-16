<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          include_once 'dbh.inc.php';
          $FirstName = $_POST['fname'];
          $StaffNumber = $_POST['staffNumber'];

          $sql = "INSERT INTO staffdetails(staff_number,name)VALUES('$StaffNumber','$FirstName');";
          mysqli_query($conn, $sql);
          header("location:../localhost/EmpViewOrders/home.php?");

    ?>
</body>
</html>
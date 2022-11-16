
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body,html{
 background-image: url("cover.jpg");
height: 100%;
padding:0px;
margin:0px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.header h1{
  margin-left:150px;
  color: white;
  font-size:550%;
}

input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin-left: 150px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 30%;
  padding: 12px 20px;
  margin-left: 150px;
  box-sizing: border-box;
}
h2 a {
  margin-left:110px;
  color: white;
  font-size:150%;
  text-decoration:none;
}

</style>
</head>
<body>
  <form action= "home.php" method= "POST">
    <div class = "header">
    <h1>Order Management Corner</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input type="text" placeholder="Staff Number" name = "SN">
    <br>
    <input type="submit" value="Login">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2><a href = "registerEmployees.php">REGISTER AS STAFF</a></h2>
      
      <?php
       $NAME = $_POST['SN'];
       if($NAME == 100 || $NAME == 101){
        header("Location:OrdersToComplete.php");
       }else{
           echo "Username or password is incorrect";
       }
      ?>
    </form>
</body>
</html>


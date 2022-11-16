<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    h1{
        text-align: center;
        font-size:300%;
    }
</style>
</head>
<body>
<form action = "signup.inc.php" method = "POST">
    <h1>REGISTER AS STAFF MEMBER</h1>
    <div class  = "container">
<label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="idNumber">Id Number:</label><br>
  <input type="text" id="idNumber" name="idNumber"><br>
  <label for="staffNumber">StaffNumber:</label><br>
  <input type="text" id="staffNumber" name="staffNumber">
  <input type = "submit" value = "REGISTER">
</div>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LOGIN</title>
     <link rel="stylesheet" href="../public/css/login.css ">
     <!-- <link rel="stylesheet" href="../public/css/global.css"> -->
     <!-- Common head info -->
     <?php
include "./common/head.php"
?>
</head>
<body>

<?php
include "./common/header.php";
?>
<div class="main">

<div class="card">
     <h1 class="cardTitle">User Login</h1>
     <form action="" method="post" id="submit_form">

          <ul>
               <li class="line"> <span class="title">Username: </span> <input type="text" name="username" id=""></li>
               <li class="line"> <span class="title">Password: </span> <input type="password" name="password" id=""></li>


            <li class="line">  <button type="submit" value="submit" id="">Login</button> </li>

               <li style="text-align: center"> <a href="./register.php">Haven't got account? Register here.</a></li>
          </ul>








     </form>



</div>


</div>






<?php include "./common/footer.php";?>





</body>
</html>
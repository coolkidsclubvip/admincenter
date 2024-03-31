
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>REGISTER</title>
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
     <h1 class="cardTitle">User Register</h1>

     <form action="" method="post" id="submit_form" onsubmit="submitForm(event)">

          <ul>
               <li class="line"> <span class="title">Username: </span>
               <input type="text" name="username" id=""></li>
               <li class="line"> <span class="title">Password: </span>
               <input type="password" name="password" id=""> </li>
                <li class="line"> <span class="title">Re-Password: </span>
                <input type="password" name="re_password" id=""></li>

            <li class="line">  <button type="submit" value="submit" id="">Register
            </button> </li>

               <li style="text-align: center"> <a href="./login.php">Already have account? Login here.</a></li>
          </ul>
     </form>

   </div>
</div>






<?php include "./common/footer.php";?>
<script>




// 处理提交
function submitForm(event) {
     event.preventDefault();
     console.log("sbumit clicked");
     let form = document.getElementById('submit_form')
     let formData = new FormData(form)
     let datas = formData.entries();

for (let data of datas) {

console . log("data is:", data); //FormData Iterator Array(2)  0: "username"1: "2222"

}





}

</script>

</body>
</html>
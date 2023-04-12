<?php  
include 'regis.php';
include 'checklogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login_page</title>
</head>

<body>


<section class="vh-100 gradient-custom ">
    <div class="container py-5 h-100 ">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration bg-warning-subtle" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
              <form action="checklogin.php" method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="LEml" class="form-control" name="username" />
    <label class="form-label" for="LEml">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="Lpassword" class="form-control" name="password" />
    <label class="form-label" for="Lpassword">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <input type="submit" name="login" class="btn btn-primary btn-block mb-4" value="login"/>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="User_R.php">Register</a></p>

  </div>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/validation.js"></script>
  <!-- <script>


  function sign(){
    var login = document.getElementById("LEml").value();
    var password = document.getElementById("Lpassword").value();

    const email = 

    if(login==email && password==pass){
        alert("success");
        return false;
    }else{
        alert("fail");
    }
}
  </script> -->

 </body>
</html>


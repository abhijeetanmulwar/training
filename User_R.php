<?php
require 'connection.php'; 
include 'regis.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
   
<section class="vh-100 gradient-custom ">
    <div class="container py-5 h-100 ">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration bg-warning-subtle" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Register</h3>
              <form name="User_registration" method="POST">
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="firstName" class="form-control form-control-lg" name="Fname" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" name="Lname" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      <input type="date" class="form-control form-control-lg" id="birthdayDate"  name="Date" />
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="gend" type="radio" id="femaleGender"
                        value="option1" checked/>
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input"name="gend" type="radio" id="maleGender"
                        value="option2"  />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="gend" type="radio" id="otherGender"
                        value="option3" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" name="Gmail" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>



                    <div class="form-outline">
                    <h6>At least 1-Upper,Lowercase, Number,Symbol,Min 8 chars and Max 12 chars.</h6>
                      <input type="Password" id="Pwd" class="form-control form-control-lg" name="password" />
                      <label class="form-label" for="Pwd">Password</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                      <input type="text" id="phoneNumber" class="form-control form-control-lg" name="mobile" />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>
 
                    <div class="form-outline">
                        <input type="text" rows="2" cols="50" class="form-control form-control-lg" id="msg"  name="message" />
                        <label class="form-label select-label">Message</label>
                    </div>

                  </div>
              
                </div>
  
                <div class="row">
                  <div class="col-12">
  
                    <select class="select form-control-lg" id="pet" >
                      <option value="1" disabled>Choose pet</option>
                      <option value="2">pet-1</option>
                      <option value="3">pet-1</option>
                      <option value="4">pet-1</option>
                    </select>
                    <label class="form-label select-label">Choose pet</label>
  
                  </div>
                </div>
        
  
                <div class="mt-4 pt-2">
                  <input type="submit" value="Submit" name="submit"class="btn btn-primary btn-lg"  id="regi">
                  <button ><a href="loginpage.php">Login</a></button>
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>










  
  <script src="js/jquery.js"></script>
  <script>
    
    $(document).ready(function(){
            $("#regi").click(function(){
                var name = $('#firstName').val();
                var lastn = $('#lastName').val();
                var Birth = $("#birthdayDate").val();
                var email = $('#emailAddress').val();
                var pass = $('#Pwd').val();
                var contact = $('#phoneNumber').val();
                var msgs = $('#msg').val();
               
                
               var nameformat = /^[a-zA-Z]+$/;
                    var mailformat =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/;
                    var passformat = /^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/;
                    var contactformat = /[0-9]$/;
            
                if(name == ''){
                    alert(" Enter the name");
                    $('#firstName').addClass('.errorbox');
                    return false;
                }else if(!name.match(nameformat)){
                    alert("you have entered an invalid name");
                    return false;
                }

                           
                if(lastn == ''){
                    alert(" Enter the  last name");
                    $('#lastName').addClass('.errorbox');
                    return false;
                }else if(!name.match(nameformat)){
                    alert("you have entered an invalid last name");
                    return false;
                }
                
                if(email == ''){
                    alert(" Enter the email");
                    $('#emailAddress').addClass('.errorbox');
                    return false;
                 }else if(!email.match(mailformat)){
                    alert("you have entered an invalid email");
                    return false;
                }

                if(pass == ''){
                    alert(" Enter the password");
                    $('#Pwd').addClass('.errorbox');
                    return false;
                 }else if(!pass.match(passformat)){
                    alert("enter At least 1-Upper,Lowercase, Number,Symbol,Min 8 chars and Max 12 chars.");
                    return false;
                }
                
                if(contact == ''){
                   alert(" Enter the contact");
                    $('#phoneNumber').addClass('.errorbox');
                    return false;
                }else if(!contact.match(contactformat)){
                    alert("Enter proper contact number");
                    return false;
                }
                // document.User_registration.submit();
                // document.User_registration.action="doctor1.php";
      
            }) 
         });

   
  </script>

 <script src="js/validation.js"></script>
 

</body>
</html>
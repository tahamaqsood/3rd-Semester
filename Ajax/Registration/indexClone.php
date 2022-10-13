<?php
include('dbConnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Sweet Alert2 CSS file -->
    <link rel="stylesheet" href="dist/sweetalert2.min.css">
   </head>
  <body>
    <div class="container" style="margin-top:10px;">
        <div class="row">  <!-- 1st Row -->
            <div class="col-md-12">
                <h1 class="text-center text-uppercase jumbotron" style="font-weight:900; letter-spacing:1px;">Register Yourself Here</h1>
            </div>
        </div>
        <div class="row float-right"> <!-- 2nd Row -->
            <div class="col-md-12">
                <button class="btn btn-success" type="button" title="Register now" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</button>
                <button class="btn btn-primary" type="button" title="Login now" data-bs-toggle="modal" data-bs-target="#signinModal">Sign in</button>
            </div>
        </div>
    </div>

    <!-- Signup Modal Started -->
    <div class="modal fade" id="signupModal">
        <!-- Modal Dialog -->
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <!-- Heading -->
                    <h1 class="modal-title" style="font-weight:900">SIGN UP</h1>
                    <!-- Close Button -->
                    <button type="button" data-bs-dismiss="modal" title="Close">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Signup Form -->
                    <form action="" method="post">
                        <!-- First Name -->
                        <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control">
                        <br>
                        <!-- Last Name -->
                        <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control">
                        <br>
                        <!-- Gender -->
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <br>
                        <!-- Age -->
                        <input type="number" name="age" id="age" placeholder="Enter Age" class="form-control">
                        <br>
                        <!-- Email -->
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control">
                        <br>
                        <!-- Password -->
                        <input type="password" name="pass" id="pass" placeholder="Enter Password" class="form-control">
                        <br>
                        <!-- Confirm Password -->
                        <input type="text" name="cpass" id="cpass" placeholder="Re-Enter Password" class="form-control">
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="signup()">Sign up</button> <!-- Signup Button -->
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button> <!-- Cancel Button -->
                </form>
                </div>
            </div>
        </div>
    </div> <!-- Signup Modal Ended -->



    <!-- Login Modal Started -->
    <div class="modal fade" id="signinModal">
        <!-- Modal Dialog -->
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <!-- Heading -->
                    <h1 class="modal-title" style="font-weight:900">SIGN IN</h1>
                    <!-- Close Button -->
                    <button type="button" data-bs-dismiss="modal" title="Close">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Login Form -->
                    <form action="" method="post">
                        <!-- Email -->
                        <input type="email" name="email2" id="email2" placeholder="Enter Email" class="form-control">
                        <br>
                        <!-- Password -->
                        <input type="password" name="pass2" id="pass2" placeholder="Enter Passowrd" class="form-control">
                        <br>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Login</button> <!-- Signup Button -->
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button> <!-- Cancel Button -->
                </form>
                </div>
            </div>
        </div>
    </div> <!-- Login Modal Ended -->

    <!-- Scripting -->
    <script type="text/javascript">
        function signup()
        {
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var gender = $('#gender').val();
            var age = $('#age').val();
            var email = $('#email').val();
            var pass = $('#pass').val();
            var cpass = $('#cpass').val();

            // Validation For Empty Fields
            if(fname=="" || lname=="" || gender=="" || age=="" || email=="" || pass=="" || cpass=="")
            {
                alert('All fields are required');
            }
            else
            {
                // Validation for matching password and confirm password fields.
                if(pass!=cpass)
                {
                    alert("Password and Confirm password is not identical");
                }
                else
                {
                    // $.ajax({
                    //     type: "method",
                    //     url: "url",
                    //     data: "data",
                    //     success: function (response) {
                            
                    //     }
                    // });
                } 
            }
        }
    </script>





<!-- Sweet Alert2 JS file -->
<script src="dist/sweetalert2.all.min.js"></script>
<!-- Other CDNs -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
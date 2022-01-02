<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

       <!-- Using Bootstrap Grid System -->
       <div class="container" style="margin-top:10px;">
           <div class="row">
               <div class="col-md-4">

               <!-- Signup Form -->
               <form action="Signup.php" method="post" name="f">

                   <!-- First Name -->
                   <label>First Name</label>
                   <input type="text" name="fname" placeholder="Enter First Name" class="form-control" required>
                   <br>

                   
                   <!-- Last Name -->
                   <label>Last Name</label>
                   <input type="text" name="lname" placeholder="Enter Last Name" class="form-control" required>
                   <br>

                  
                   <!-- Age -->
                   <label>Age</label>
                   <input type="number" name="age" placeholder="Enter Age" class="form-control" required>
                   <br>


                   <!-- Gender -->
                   <label>Gender:</label>

                   <!-- Male -->
                   <label>Male</label>
                   <input type="radio" name="gender" value="Male">

                   <!-- Female -->
                   <label>Female</label>
                   <input type="radio" name="gender" value="Female">
                   <br>


                   <!-- City -->
                   <label>City</label>
                   <select name="city" class="form-control" required>

                       <option value="">Choose</option>
                       <option value="Karachi">Karachi</option>
                       <option value="Islamabad">Islamabad</option>
                       <option value="Lahore">Lahore</option>
                       <option value="Peshawar">Peshawar</option>
                       <option value="Multan">Multan</option>
                       <option value="Faisalabad">Faisalabad</option>

                <!-- Note: Leave value attribute of choose option empty else required attribute would not work -->
                   </select>
                   <br>


                   <!-- Email -->
                   <label>Email</label>
                   <input type="text" name="email" placeholder="Enter Email" class="form-control" required title="Invalid Email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$">
                   <br>


                   <!-- Username -->
                   <label>Username</label>
                   <input type="text" name="username" placeholder="Enter Username" class="form-control" required>
                   <br>


                   <!-- Password -->
                   <label>Password</label>
                   <input type="password" name="password" placeholder="Enter Password" class="form-control" required title="Your password must contain Uppercase,lowercase,digits,speacial characters and 8 letter" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                   <br>


                   <!-- Confirm Password -->
                   <label>Confirm Password</label>
                   <input type="password" name="confirmpassword" placeholder="Re-Enter Password" class="form-control" required>
                   <br>


                   <!-- Signup Button -->
                   <input type="submit" value="Signup" class="btn btn-success btn-block" name="btnSignup" onclick="return Check()">

               </form>

               </div>
           </div>
       </div>


       <!-- Php Work -->
       <?php
    // Including Database Connection
    include('dbConnection.php');
    
    // Condition for Signup button
    if(isset($_POST['btnSignup']))
    {
        // Recieving field's values in php variables except confirm password
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // MySql query
        $query = "insert into USERS values(Null,'$fname','$lname','$age','$gender','$city','$email','$username','$password')";

        // Executing Query
        $exec = mysqli_query($con,$query);
        if($exec==true)
        {
            // Displaying alert message for Registration.
            echo "<script>alert('Registered Successfully.!!')</script>";

            // Displaying Username and Password in alert message after the registration completed.!
            echo "<script>alert('Your username is ".$username." and your password is ".$password."')</script>";

            // Redirecting to Login page after the registration completed.!
            echo "<script> window.location.href='Login.php'; </script>";

            /*
            Note: Don't use header function for redirection because it conflicts with scripting
            (alert messages will not be shown). 
             */
        }
    }
       ?>


       <!-- Using Javascript to compare both password fields -->
       <script>

           function Check()
           {
            // Storing field values in Javascript variables by using form's name which is 'f'
               var pass = f.password.value;  
               var cpass = f.confirmpassword.value;

            // Comparasion of both fields    
               if(pass != cpass)
               {            
                   alert('Password not matched');
                   return false;
               }
               else
               {
                   return true;
               }
           }

       </script>
       
       <!-- Note: We used form's name 'f' to access it's fields and stored both field's values in 2 separate variables.
           And then we apply validation by using decision making construct "if else". -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
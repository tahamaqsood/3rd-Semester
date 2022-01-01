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
      
     <!-- Bootstrap Grid System -->
     <div class="container" style="margin-top:20px;">
         <div class="row">
             <div class="col-md-4">


             <!-- Login Form -->
             <form action="login.php" method="post">


             <!-- Email -->
             <label>Email</label>
             <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
             <br>


             <!-- Password -->
             <label>Password</label>
             <input type="password" name="password" class="form-control" placeholder="Enter Password" id="Show" required>
             <br>


             <!-- Checkbox For Showing Password -->
             <input type="checkbox" onclick="ShowPasssword()">
             <label>Show Password</label>


             <!-- Login Button -->
             <input type="submit" value="Login" name="btnLogin" class="btn btn-primary btn-block">

             </form>

             </div>
         </div>
     </div>


      <!-- Php Work Starts -->
     <?php

    // Including Database Connection  
     include('dbConnection.php');
    

    // Starting Session
      session_start();


    // Condition For Login Button
    if(isset($_POST['btnLogin']))
    {
        // Recieving HTML field's values in Php variables
        $email = $_POST['email'];
        $password = $_POST['password'];


        // MySql Query
        $query = "select * from USERS where EMAIL='$email' and PASSWORD='$password'";


        // Executing MySql Query
        $result = mysqli_query($con,$query);


        // Counting Rows stored in $result variable
        $totalRows = mysqli_num_rows($result);


        // echo $totalRows; (Result will be 1 if email and password both matches as we used 'and' operator to get only 1 row) 


        // Condition For Total Rows
        if($totalRows==1)
        {  
            // Recieving an email in session object after the user login.
            $_SESSION['email'] = $email;


            // Storing Creation time of user session in session object.(Using Current time method)
            $_SESSION['CreationTime'] = time();

            
            // Redirecting to Home page
            header('location:Home.php');
        }          
        else
        {
          // Displaying Error Message within Bootstrap Grid System
          echo
        "<div class='container' style='margin-top:20px;'>
          <div class='row'>
            <div class='col-md-4'>
                   Email or Password is incorrect
            </div>
           </div>
        </div>";
        }
    }

    // Condition to restrict user from entering login page after he or she login successfully
    if(isset($_SESSION['email'])==true)
    {
       header('location:Home.php');
    }
?>
     

     <!-- Using Java Script For "Show Password Functionality" -->
     <script>
         function ShowPasssword()
         {
             var pass = document.getElementById("Show");
             if(pass.type == "password")
             {
                pass.type = "text";
             }
             else
             {
                 pass.type = "password";
             }
         }
     </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
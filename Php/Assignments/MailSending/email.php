<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Sweet Alert2 Css file -->
    <link rel="stylesheet" href="dist/sweetalert2.min.css">

    <!-- Sweet Alert2 Js file -->
    <script src="dist/sweetalert2.all.min.js"></script>

  </head>
  <body>

      <!-- Using bootstrap grid system -->
      <div class="container" style="margin-top:100px;">
          <div class="row">
              <div class="col-md-5 mx-auto" style="-webkit-box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.71);
              -moz-box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.71);box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.71);">

               <!-- Form Opening -->
               <form action="" method="post">
               <br>

               <!-- Form Heading -->
               <h1 class="text-center" style="font-weight:900">CONTACT US FORM</h1>

               <!-- Email -->
               <label style="font-weight:900">Email</label>
               <input type="email" name="email" placeholder="Enter Email" class="form-control" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required>
               <br>

               <!-- Subject -->
               <label style="font-weight:900">Subject Category</label>
               <select name="subject" class="form-control" required>
                   <option value="">Select Subject</option>
                   <option value="Feed back">Feed back</option>
                   <option value="Suggestions">Suggestions</option>
                   <option value="Complain">Complain</option>
               </select>
               <br>

               <!-- Text Area -->
               <label style="font-weight:900">Your Message</label>
               <textarea name="message"  cols="30" rows="5" placeholder="Let us know about your feed back, suggestions or complain here.." class="form-control" required></textarea>
               <br>

               <!-- Submit Button -->
               <input type="submit" value="Send Mail" name="SendMailBtn" class="btn btn-primary btn-block">
               <br>

               </form>
              </div>
          </div>
      </div>

      <?php
      if(isset($_POST['SendMailBtn']))
      {
        $to = "usmanhameed1790@gmail.com"; //Admin email
        $from = $_POST['email']; //User email
        $subject = $_POST['subject']; //subject
        $message = $_POST['message']; //message

        $result = mail($to,$subject,$message,$from);
        if($result==true)
        {
            echo "<script>
            swal.fire({
                title: 'Sended Successfully',
                text: 'Email has been sent to $to',
                icon: 'success',
                confirmButtonColor: 'blue',
                timer: 3000 
            });
            </script>";
        }
        else
        {
            echo "<script>
            swal.fire({
                title: 'Sending Failed',
                text: 'Email has not sent',
                icon: 'error',
                confirmButtonColor: 'blue',
                timer: 3000 
            });
            </script>";
        }
      }
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
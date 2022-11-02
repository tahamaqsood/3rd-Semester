<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Get Radio Button Value</title>
</head>
<style>
    .container{
        margin-top:20px;
    }
    *{
        font-family:sans-serif;
        font-weight:bold;
    }
    h1{
            font-weight:900;
            letter-spacing:1px;
        }
</style>
<body>
    <!-- Bootstrap Grid System -->
    <div class="container">
    <div class="row"> <!-- 1st Row -->
            <div class="col-md-12">
                <h1 class="jumbotron bg-dark text-white text-center text-uppercase">Get Radio Button Value Using JQuery</h1>
            </div>
        </div>

        <div class="row"> <!-- 2nd Row -->
            <div class="col-md-5">
                <label for="">Gender</label>
                <br>
                <!-- Male -->
                <label for="">Male</label>
                <input type="radio" name="gender" value="Male">
                <!-- Female -->
                <label for="">Female</label>
                <input type="radio" name="gender" value="Female">
                <br>

                <!-- Button -->
                <span>
                <button type="button" id="btn">Click</button>
                <a href="index.php" class="btn btn-info">Back</a>
                </span>
            </div>
        </div>
    </div>

    <!-- Scripting -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#btn').click(function(){
                var gender = $("input[name='gender']:checked").val();
                alert(gender);
            });
        });
    </script>
</body>
</html>
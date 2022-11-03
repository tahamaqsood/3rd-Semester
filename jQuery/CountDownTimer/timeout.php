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
    <title>Timeout</title>
</head>
<style>
    *{
        font-family: sans-serif;
    }
    .container{
        margin-top:20px;
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
                <h1 class="text-center text-uppercase jumbotron text-white bg-dark">This is time out page</h1>
            </div>
        </div>

        <div class="row"> <!-- 2nd Row -->
            <div class="col-md-12">
                <a href="index.php" class="btn btn-secondary">Home Page</a>
                <a href="timeout.php" class="btn btn-secondary">Timeout Page</a>
                <a href="interval.php" class="btn btn-secondary">Interval Page</a>
            </div>
        </div>
    </div>

    <!-- Scripting -->
    <script type="text/javascript">
        $(document).ready(function () {

            function myTimer()
            {
                alert('Your time is up!');
            }

            setTimeout(myTimer,5000);
            
        });
    </script>
</body>
</html>
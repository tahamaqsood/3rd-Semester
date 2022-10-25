<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-Complete</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JQuery UI CSS File -->
    <link rel="stylesheet" href="jquery-ui-1.13.2/jquery-ui.min.css">
    <!-- JQuery UI JS File -->
    <script src="jquery-ui-1.13.2/jquery-ui.min.js"></script>
</head>
<body>
    <!-- Bootstrap Grid System -->
    <div class="container" style="margin-top:20px;">
    <div class="row"> <!-- 1st Row -->
        <div class="col-md-12">
            <h1 class="jumbotron text-center text-white bg-dark" style="font-weight:900;">JQUERY UI AUTO COMPLETE POPULATED LIST</h1>
        </div>
    </div>
        <div class="row"> <!-- 2nd Row -->
            <div class="col-md-4 mx-auto">
                <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
            </div>
        </div>
    </div>

    <!-- Scripting -->
    <script type="text/javascript">
        var students = ["Usman","Umer","Umair","Uzair","Bilal","Babar","Rizwan","Raheel","Aashir","Noman","Amir","Nadir"];
        $(document).ready(function () {
            $('#name').autocomplete({
                source:students
             },{ 
                autoFocus: true
             });
        });
    </script>

</body>
</html>
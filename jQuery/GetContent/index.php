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
    <title>Get Content</title>
    <style>
        *{
            font-family: sans-serif;
        }

        h1{
            font-weight:900;
            letter-spacing:1px;
        }
        .container{
            margin-top:50px;
        }
    </style>
</head>
<body>
    <!-- Bootstrap Grid Sytem -->
    <div class="container">
        <div class="row"> <!-- 1st Row -->
            <div class="col-md-12">
                <h1 class="jumbotron bg-dark text-white text-center text-uppercase">Get Content Using text() html() attr() and val()</h1>
            </div>
        </div>

        <div class="row"> <!-- 2nd Row -->
            <div class="col-md-5">
                <!-- Headings -->
                <h1 id="heading1">This is heading 1 </h1>
                <h1 id="heading2">This is <b>heading 2</b> </h1>
                <h1 id="heading3" title="3rd heading">This is heading 3 </h1>
                <input type="text" name="" id="txt" placeholder="Enter Something" class="form-control">
                <br>

                <!-- Buttons -->
                <button type="button" id="btn1">Get Text</button>
                <button type="button" id="btn2">Get Text Within HTML elements</button>
                <button type="button" id="btn3">Get Attribute</button>
                <button type="button" id="btn4">Get Field Value</button>
                <br><br>
                <a class="btn btn-info" href="radioButton.php">Go to next page</a>
            </div>
        </div>
    </div>

    <!-- Scripting -->
    <script type="text/javascript">
        
        $(document).ready(function () {

        // For Plain Text
        $('#btn1').click(function(){
            var a = $('#heading1').text();
            alert(a);
        });

        // For HTML Content
        $('#btn2').click(function(){
            var b = $('#heading2').html();
            alert(b);
        });

        // For Element Attributes
        $('#btn3').click(function(){
            var c = $('#heading3').attr("title");
            alert(c);
        });

        // For HTML Field Value
        $('#btn4').click(function(){
            var d = $('#txt').val();
            alert(d);
        });

    });
     
    </script>
</body>
</html>
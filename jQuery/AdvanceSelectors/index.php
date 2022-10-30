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
    <title>Advance Selectors</title>
    <style>
        h1{
            font-weight:900;
            letter-spacing:1px;
            font-family: Sans-serif;
        }
    </style>
</head>
<body>
    <!-- Bootstrap Grid System -->
    <div class="container" style="margin-top:10px;">
        <div class="row"> <!-- 1st Row -->
            <div class="col-md-12"> <!-- 1st Column -->
                <h1 class="jumbotron text-center text-white bg-dark">ADVANCE SELECTORS IN JQUERY</h1>
            </div>
        </div>


        <div class="row"> <!-- 2nd Row -->
            <div class="col-md-4"> <!-- 1st Column -->
                <!-- Div 1 -->
                <h1>Div 1</h1>
                <div id="div1">

                    <!-- Heading 1 -->
                    <h4>Heading 1</h4>
                    <p>Paragraph 1</p>
                    <p>Paragraph 2</p>
                    <p>Paragraph 3</p>

                    <!-- Heading 2 -->
                    <h4>Heading 2</h4>
                    <p>Paragraph 1</p>
                    <p>Paragraph 2</p>
                    <p>Paragraph 3</p>
                </div>
            </div>


            <div class="col-md-4"> <!-- 2nd Column -->
                <!-- Div 2 -->
                <h1>Div 2</h1>
                <div id="div2">

                    <!-- Heading 1 -->
                    <h4>Heading 1</h4>
                    <p>Paragraph 1</p>
                    <p>Paragraph 2</p>
                    <p>Paragraph 3</p>

                    <!-- Heading 2 -->
                    <h4>Heading 2</h4>
                    <p>Paragraph 1</p>
                    <p>Paragraph 2</p>
                    <p>Paragraph 3</p>

                </div>
            </div>


            <div class="col-md-4"> <!-- 3rd Column -->
                    <!-- Div 3 -->
                    <h1>Div 3</h1>
                    <div id="div3">

                    <!-- Heading 1 -->
                    <h4>Heading 1</h4>
                    <p>Paragraph 1</p>
                    <p>Paragraph 2</p>
                    <p>Paragraph 3</p>

                    <!-- Heading 2 -->
                    <h4>Heading 2</h4>
                    <p>Paragraph 1</p>
                    <p>Paragraph 2</p>
                    <p>Paragraph 3</p>

                </div>
            </div>
        </div>

        <div class="row"> <!-- 3rd Row -->
            <div class="col-md-4 offset-3">
                <!-- Buttons -->
                <button type="button" class="btn btn-secondary" id="btn1">Button 1</button>
                <button type="button" class="btn btn-secondary" id="btn2">Button 2</button>
                <button type="button" class="btn btn-secondary" id="btn3">Button 3</button>
                <button type="button" class="btn btn-secondary" id="btn4">Button 4</button>
                <a class="btn btn-secondary" href="list.php">Next Page</a> <!-- Redirecting To Next Page -->
            </div>
        </div>
    </div>

    <!-- Scripting -->
    <script type="text/javascript">
        $(document).ready(function(){

            // All headings gets effected.
            $('#btn1').click(function(){
                $('div h4').css("color","green");
            });
            
            // All paragraphs gets effected.
            $('#btn2').click(function(){
                $('div p').css("font-family","cooper");
            });

            // Only paragraphs within Div 3 gets effected.
            $('#btn3').click(function(){ 
            $('#div3 p').css("background-color","purple");
            });

            // All Divs gets effected
            $('#btn4').click(function () { 
                $('div').css("color","red"); 
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teste PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <!-- Import de jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Script jQuery a ser executado -->
    <script>
    $(document).ready(function(){
        $("#show_button").click(function(){
            $("#div1").show();
        });
        $("#hide_button").click(function(){
            $("#div1").hide();
        });
        $("#fade_button").click(function(){
            $("#div1").fadeToggle(1000);
        });
    }); 
    </script>

</head>
<body>
    <button id="show_button">Show</button>
    <button id="hide_button">Hide</button>
    <button id="fade_button">Fade</button>
    <br><br>

    <div id="div1" style="width:80px;height:80px;background-color:red;"></div>
</body>
</html>
<?php include_once("script.php") ?>
<html>
<head>
    <title>Corona Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <script id="javascript" src="http://localhost/IWP_DA/main.js"></script>

       <style>
        .centre{
            text-align: center;
            max-width: 500px;
            margin: auto;
        }    
           .margin{
               margin-top: 70px;
           }
    </style>    
    </head>
<body>
    <h1 class="margin centre">Corona Tracker</h1>
<div class="centre margin">
  <div class="alert alert-success">
      <?php 
     echo $weather;
    ?>
  </div>
    <button class="margin" id="upload" onclick="myFunction()">Click to know more.</button>
    <p class="margin" id="demo"></p>
</div> 
        <script src="main.js"></script>
    </body>
</html>

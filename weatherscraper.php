<?

/*
$link = "https://www.weather-forecast.com/locations/New-York/forecasts/latest";
$testlink = file_get_contents($link);
echo $testlink


*/
 
$weather = "";

if ($_POST) {

        $_POST = str_replace(" ", "-", $_POST);

        $weatherForecast = 'https://www.weather-forecast.com/locations/'.$_POST["city"].'/forecasts/latest';

        $html = file_get_contents($weatherForecast);

        $pageArray = explode('(1–3 days):</div><p class="location-summary__text"><span class="phrase">', $html);
        $secondPageArray = explode("▼", $html);

        $weather = $secondPageArray[0];


    }







/*  What do I do with these!?!??!

    $errorMessage = "";

    if ($_POST) {

    $citySearch = str_replace(" ", "-", $city);
    $weatherForecast = "https://www.weather-forecast.com/locations/".$citySearch."/forecasts/latest";



     if (!$_POST["city"]) {

        $errorMessage .= '<div id="weatherSummary" class="alert alert-danger" role="alert"><strong><p>Please include the name of a city.</p></strong></div>';

        }


    }




echo $weatherForecast;



*/

?>

<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



    <style type="text/css">

        .jumbotron {

            text-align:center;
            background-image: url("https://images.unsplash.com/photo-1505051508008-923feaf90180?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80");
            background-size:cover;
            height:100%;
            color:white;

        }

        .lead {

            margin:0px 0px 30px 0px;
        }

        #city {

            width:300px;
            margin:0px auto 40px auto;

        }

        #weatherSummary {

            color:white;
            font-size:10px;
            font-family:sans-serif;
            margin:0 auto;
            width: 300px;
            position:relative;
            top:-575px;


        }

        .display-4 {


            color:white;


        }

        body {


            background:none;
        }


    </style>



</head>



<body>

<form method="post" id="weatherForm">
<div class="jumbotron text-light bg-dark">
  <h1 class="display-4">What's the weather?</h1>
  <p class="lead">Enter the name of a city.</p>
<div class="form-group">
    <input type="city" class="form-control" id="city" name ="city" aria-describedby="cityInput">
  </div>
    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

<div>
    <p id="weatherSummary">
<?php

        if ($weather) {

        echo '<div class="alert alert-light" role="alert">'.$weather.'</div>';

}


        ?>


    </p>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script type="text/javascript">

   /* var errorMessage = "";

   $("form").submit(function() {

        if ($("#city").val() == "") {

            errorMessage += "Please insert the name of a city.";
            $("#weatherSummary").html('<div class="alert alert-danger" role="alert">' + errorMessage + '</div>');

        }

       return false;

    });

*/


</script>

</body>
</html>

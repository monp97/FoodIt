<!DOCTYPE html>
<html lang="en">
<head>

  <style>
  body{
    background-image: url("images/back_recipe.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .demo{

    position: relative;
    top:100px;
    background-color: white;
    width: 100px;
    display:none;
  }
  </style>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onload="getLocation()">
<div class="demo" id="demo"></div>
<div class="container">
  <h2><center>Places near to you</center></h2>
  <div class="list-group">
    <a href="#" class="list-group-item" style="height:100px;">
      <h4 class="list-group-item-heading">First List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
  </div>
</div>

</body>
</html>
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    else
    {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}

</script>


  <!-- &key=AIzaSyDd8txsSJcRO8-1rmY1XA8WEzT4dI0nWEc -->

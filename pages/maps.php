<?php ?>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSS -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

      <link rel="stylesheet" href="/pages/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="/pages/assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="/pages/assets/css/form-elements.css">
      <link rel="stylesheet" href="/pages/assets/css/style.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="/pages/assets/ico/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144"
            href="/pages/assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114"
            href="/pages/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/pages/assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="/pages/assets/ico/apple-touch-icon-57-precomposed.png">
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <style>

        #map {
            height: 100%;
        }

        html,
        body {
            height: 75%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
        }

        window.initMap = initMap;
    </script>
  </head>
  <body>
  <?php include("navbar.php"); ?>
  <div class="top-content">

      <div class="inner-bg">
          <div class="container">
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text">
                      <h1><strong>IEFPWay</strong> Exemplo Google Maps</h1>
                      <div class="description">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div id="map"></div>
              </div>
          </div>
      </div>

  </div>

    <!--
The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
      ></script>
  <!-- Javascript -->
  <script src="/pages/assets/js/jquery-1.11.1.min.js"></script>
  <script src="/pages/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/pages/assets/js/jquery.backstretch.min.js"></script>
  <script src="/pages/assets/js/scripts.js"></script>

  <!--[if lt IE 10]>
  <script src="/pages/assets/js/placeholder.js"></script>
  <![endif]-->

  </body>
</html>
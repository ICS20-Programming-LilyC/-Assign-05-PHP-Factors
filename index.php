<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Factors webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!--Stylesheet CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-deep_purple.min.css" />

    <!--Title-->
    <title>Factors Webpage</title>
  </head>
  <body>

    <!--Header-->
    <?php echo "<h1>Factors Webpage with PHP</h1>"; ?>

    <!--Text-->
    <?php echo "<p>Welcome to our waffles breakfast company. With this webpage you can place an order for a waffle with your choice of topping and optional items. We have a variety of different sizes and toppings so that you can customize your own waffle. In addition with optional breakfast drinks and fried chicken tenders. We hope you enjoy your meal!</p>" ?>

    <!--Image-->
    <br>
    <center>
      <img src="./images/multiplicationColoredChart.jpg" alt="Multiplication chart image" width="500" height="300">
    </center>
    <br>
    <br>

    <!--Form for user input-->
    <form action="./calculations.php" method="post" target="results">
      <?php echo "<h4>Enter a number:</h4>"; ?>
      <input type="number" step="1" id="number" name="number" placeholder="Your number...">
      <br>
      <br>
      
    <!--Adding id to submit button to style button-->
      <input type="submit" id="calculate" value="Calculate!" button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
    </form>
      <br>
      <br>

    <!--Iframe results for the number ranges that will be displayed-->
    <iframe id="results" name="results"></iframe>
      <br>
  </body>
</html>
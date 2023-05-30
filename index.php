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
     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-yellow.min.css" />

    <!--Title-->
    <title>Factors Webpage</title>
  </head>
  <body>

    <!--Header-->
    <?php echo "<h1>Factors Webpage with PHP</h1>"; ?>

    <!--Welcoming text-->
    <?php echo "<p>Welcome to my factors webpage! If you're ever stuck trying to determine the factors of a number, simply input your number and my program will display all the factors (including negatives)! I can display the factors in order (least to greatest) or I can display the factors in reversed order from (greatest to least). I will also indicate if the number you entered is even or odd. Hopefully, you find my website helpful!!</p>" ?>

    <!--Image-->
      <br>
    <center>
      <img src="./images/secondMultiplicationChart.png" alt="Multiplication chart image" width="500" height="400">
    </center>
      <br>
      <br>

    <!--Multiplication chart explanation text-->
    <center>
    <?php echo "<p>You can use the multiplication chart above to verify its factors.</p>";?>
    </center>
      
    <!--Text-->
    <?php echo "<h3>Please enter your input below:</h3>"; ?>

    <!--Form for user input-->
    <form action="./calculations.php" method="post" target="results">
      <?php echo "<h6>Enter a number:</h6>"; ?>
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
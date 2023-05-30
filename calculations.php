<?php

// Setting variables.
$counter = 1;
$numberString = "";
$message = "";

// Initializing variables and constant.
$number = intval($_POST["number"]);
$absNumber = abs($number);

// If the user didn't provide any input or their input is equal to 0, display "Please enter a valid number (Zero NOT included)."
if ($number == 0 || empty($number)) {
  $message = "Please enter a valid number (Zero NOT included).";
}

// Else, the user provided a valid number.
else {
  $counter = -$number;
  $message = "Here is a list of all the factors for your number:<br><br>";

  // For loop to find factors in normal order.
  for ($counter = -$absNumber; $counter <= $absNumber; $counter++) {
    if ($counter != 0 && $number % $counter == 0) {
      $numberString .= $counter . "<br>";
    }
  }

  // If the number is divided by 2 and has a remainder of 0, then display "The number you entered is even."
  if ($number % 2 == 0) {
    $message .= "The number you entered is even.<br>";
  } 

  // Else, display "The number you entered is odd."
  else {
    $message .= "The number you entered is odd.<br>";
  }

  // Add the factor list to the message.
  $message .= $numberString;
}

echo $message;

?>
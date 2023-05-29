<?php

// Setting variables.
function factorsSent() {
  $counter = 1;
  $numberString = "";
  $message = "";
  
  // Initializing variables and constant.
  $reverseYes = $_POST["reverse-yes"];
  $number = intval($_POST["number"]);
  $absNumber = abs($number);

  // If the user doesn't input anything, display "Please enter a valid number."
  if (!is_numeric($number)) {
    $message = "Please enter a valid number.";
  } 

  // Otherwise, if number is equal to 0, display "Zero has no factors."
  else if ($number == 0) {
    $message = "Zero has no factors.";
  }

  // Otherwise, if the reversed option is selected, display the user's factors in reverse order.
  else if ($reverseYes) {
    $counter = -$number;
    $message = "Here is a list of all the factors for your number:<br><br>";
    
    // For loop to find factors in reverse order.
    for ($counter = -$absNumber; $counter <= $absNumber; $counter++) {
      if ($absNumber % $counter == 0) {
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
  // Else (reversed option not selected)
  else {
    $counter = -$number;
    $message = "Here is a list of all the factors for your number:<br><br>";

    // For loop to find factors in normal order.
    for ($counter = -$absNumber; $counter <= $absNumber; $counter++) {
      if ($number % $counter == 0) {
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
}
?>
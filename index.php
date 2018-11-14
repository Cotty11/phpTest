<?php // This is a test of php variables
  $username = "Fred Smith";
  echo $username;
  echo "<br>";
  $currentUser = $username;
  echo $currentUser;
  echo "<br>";

  $team = array('Matt', 'Bob', 'Jeff', 'Fred');
  echo $team[0]; //Displays Matt

  $author = "Matt Cottam";

  echo $author;

  echo <<<_END
  This is a multi-line string using the END syntax.

  This string has been typed over several lines.

  It should display on several lines.

_END;
  
  echo $out;
?>
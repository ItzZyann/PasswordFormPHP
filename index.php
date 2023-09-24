<?php
 /*
  # Made by ItzZyann (2023)
  # Be sure to credit me while using my code.
  # Thanks. For more info contact me via email!
  # "itzzyanngames@gmail.com"
 */

$validPassword = ["testUser", "123"];

if(isset($_POST["password"])) {
 $enteredPassword = $_POST["password"];
 
 if(in_array($enteredPassword, $validPassword)) {
  displayOrigUi();
 } else {
  echo "Invalid Password.";
  displayLoginForm();
 }
} else {
 displayLoginForm();
}
 
function displayLoginForm() {
 echo '<form method="post">';
 echo '<label for="password">Enter your Password:</label>';
 echo '<input type="password" id="password" name="password" required>';
 echo '<input type="submit" value="Submit">';
 echo '</form>';
}

function displayOrigUi() {
 echo '<h1>Hello welcome!</h1>';
}

?>
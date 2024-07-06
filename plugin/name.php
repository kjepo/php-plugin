<?php

$thisfile = basename(__FILE__);
$form = "
<form action='plugins/{$thisfile}'>
  <div class='form-group'>
    <label for='fname'>First name:</label>
    <input type='text' class='form-control' id='fname' name='fname'>
  </div>
  <div class='form-group'>
    <label for='lname'>Last name:</label>
    <input type='text' class='form-control' id='lname' name='lname'>
  </div>
  <button type='submit' class='btn btn-primary'>Submit</button>
</form>";

if (count($_POST)) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    echo "Greetings {$firstname} {$lastname}!";
} else {
    echo $form;
}

?>

<?php
  include_once 'classes/DB.php';
  include 'includes/header.php'
?>

    <div align="center">
      <form action="contact.php" method="post" id="ajax">
        <div class="formdiv">
        <input id='name' type="text" name="name" placeholder="First Name"><br><br>
        <input id='last' type="text" name="last" placeholder="Last Name"><br><br>
        <input id='email' type="email" name="email" placeholder="Email"><br><br>
        <button id='submit'type="submit" name="submit" value="Send" class="button">Sign up</button>
        <p class="form-message"></p>
      </div>
    </div>
  </body>
  </html>

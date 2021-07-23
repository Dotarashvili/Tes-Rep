<?php
  require_once 'classes/DB.php';
  require_once 'classes/Sendmail.php';

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $last = $_POST['last'];
  $email = $_POST['email'];

  $errorEmpty = false;
  $errorEmail = false;

  if(empty($name) || empty($last) || empty($email)){
    echo '<span class="form-error"> Fill all fields!</span>';
    $errorEmpty = true;
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '<span class="form-error">Enter valid email address</span>';
    $errorEmail = true;
  }
  else{
    $sendInfo = new DB();
    $sendInfo->connect($name, $last, $email);

    $nowSend = new Sendmail();
    $nowSend->emailSend($name, $last, $email);
     echo "<span class='form-success'>Success!</span>";
  }
}
else{
  echo "There was an error!";
}

?>

<script>
  $("#name, #last, #email").removeClass("input-error");

  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";

  if(errorEmpty == true){
    $("#name, #last, #email").addClass("input-error");
  }
  if(errorEmail == true){
    $("#email").addClass("input-error");
  }
  if (errorEmpty == false && errorEmail == false) {
    $("#name, #last, #email").val("");
  }
</script>

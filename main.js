$(document).ready(function(){
  $("#ajax").submit(function(event){
    event.preventDefault();
    var name = $('#name').val();
    var last = $('#last').val();
    var email = $('#email').val();
    var submit = $('#submit').val();
    $(".form-message").load("contact.php", {
      name: name,
      last: last,
      email: email,
      submit: submit
    });
  });
});

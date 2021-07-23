<?php
class Sendmail{
  private $to= 'otarashvili.dato2@gmail.com';
  private $subject = 'Test Submit';

  public function emailSend($name, $last, $email){
    $message = 'First Name : '. $name . "\r\nLast Name : " . $last .  "\r\nEmail : " . $email;
    $headers = 'From:' . $email . '.';
    return mail($this->to, $this->subject, $message, $headers);
  }
}

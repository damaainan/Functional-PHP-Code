<?php

$dic = new DIC();
$dic->userEntityManager = new class() {
    public function getUser() {
      return new class() {
          public $email = 'john.doe@email.com';
      };
    }
};
$dic->emailService = new class() {
    public function send($title, $content, $email) {
        echo "Sending '$title' to $email";
    }
};

$content = controller(['username' => 'john.doe'])->runReader($dic);
// Sending 'Welcome' to john.doe@email.com

echo $content;
// <h1>Welcome !</h1>



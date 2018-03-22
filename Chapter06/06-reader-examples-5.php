<?php

require_once('06-monadic_helpers.php');
require_once('06-reader-monad.php');
use Monad\Reader;
use Functional as f;

class DIC
{
    public $userEntityManager;
    public $emailService;
}

function getUser(string $username)
{
    return Reader::of(function(DIC $dic) use($username) {
        return $dic->userEntityManager->getUser($username);
    });
}

function getUserEmail($username)
{
    return getUser($username)->map(function($user) {
        return $user->email;
    });
}

function sendEmail($title, $content, $email)
{
    return Reader::of(function(DIC $dic) use($title, $content, $email) {
        return $dic->emailService->send($title, $content, $email);
    });
}

function controller(array $post)
{
    return Reader::of(function(DIC $dic) use($post) {
        getUserEmail($post['username'])
            ->bind(f\curry('sendEmail', ['Welcome', '...']))
            ->runReader($dic);

        return "<h1>Welcome !</h1>";
    });
}


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



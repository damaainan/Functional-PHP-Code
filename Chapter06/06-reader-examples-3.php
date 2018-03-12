<?php

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




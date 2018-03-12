<?php

$date = $post->getPublicationDate();

// for any reason you modify the date
$date->modify('+14 days');

var_dump($post->getPublicationDate() == $date);
// bool(true)

$entityManager->persist($post);
$entityManager->flush();
// nothing changes in the database :(




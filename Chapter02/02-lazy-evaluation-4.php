<?php

// let's imagine $blogs is a lazily evaluated collection
// containing all the blog posts of your application order by date
$posts = [ /* ... */ ];

// last 10 posts for the homepage
return $posts->reverse()->take(10);

// posts with tag 'functional php'
return $posts->filter(function($b) {
    return $b->tags->contains('functional-php');
})->all();

// title of the first post from 2014 in the category 'life'
return $posts->filter(function($b) {
    return $b->year == 2014;
})->filter(function($b) {
    return $b->category == 'life';
})->pluck('title')->first();



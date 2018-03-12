<?php

function controller(array $post)
{
    return Reader::of(function(DIC $dic) use($post) {
        getUserEmail($post['username'])
            ->bind(f\curry('sendEmail', ['Welcome', '...']))
            ->runReader($dic);

        return "<h1>Welcome !</h1>";
    });
}




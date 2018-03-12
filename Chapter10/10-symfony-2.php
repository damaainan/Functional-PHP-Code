<?php

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class PostController extends Controller
{
    /**
     * @Route("/blog/{id}")
     * @ParamConverter("post", class="SensioBlogBundle:Post")
     */
    public function showAction(Post $post)
    {
        // do somethiner here
    }
}


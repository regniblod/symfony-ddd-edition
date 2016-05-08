<?php

namespace Acme\Foo\Application\FooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FooController extends Controller
{
    public function indexAction()
    {
        return new Response('Hello world!');
    }
}

<?php

namespace TestBundle\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\BufferedOutput;

class TestService
{
    public function __construct()
    {
        
    }
    public function test()
    {
        echo("from service");
        
    }
}

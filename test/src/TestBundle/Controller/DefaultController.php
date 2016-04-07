<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\BufferedOutput;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
class DefaultController extends Controller
{
    public function indexAction()
    {
     
      //return array('hello' => 'world');
      echo"hamza";
      echo"abbes";

      echo"hamza";
      echo"abbes";

      echo"hamza";
      echo"abbes";

      echo"hamza";
      echo"abbes";
      echo"hamza";
      echo"abbes";

      echo"hamza";
      echo"abbes";

      echo"hamza";
      echo"abbes";

      echo"hamza";
      echo"abbes";

        return $this->render('TestBundle:Default:index.html.twig');
    }



     public function testAction(Request $request)
    {

        // récupération du service test.test
       
        /*
        $test=$this->container->get('test.test');
       $test->test();
        $name = "   hamzk";
        // $name = $request->request->get('username');
    return $this->render('TestBundle:Default:test.html.twig', array(
        "name" => $name));

        */

// lancer une commande à partir d'un controller
       

       /* 
       $kernel = $this->get('kernel');
        $application = new Application($kernel);
        
        $application->setAutoExit(false);

        $input = new ArrayInput(array(
           'command' => 'swiftmailer:spool:send'
        ));
        var_dump($input);
        // You can use NullOutput() if you don't need the output
        $output = new BufferedOutput();
        $application->run($input, $output);

        // return the output, don't use if you used NullOutput()
        $content = $output->fetch();

        // return new Response(""), if you used NullOutput()
        return new Response($content);



        */

/*

------------------------------------------ run a commande from the browser ----------------------------------


$process = new Process('cd .. ;  bin/codecept run unit --report');
var_dump($process);
$process->run();
// executes after the command finishes
if (!$process->isSuccessful()) {
throw new ProcessFailedException($process);
}
//echo $process->getOutput();
return new Response( $process->getOutput());

*/
die( "hello hamza");
//return array('hello' => 'world');



    }
}
 
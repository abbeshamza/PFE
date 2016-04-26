<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 11/04/16
 * Time: 12:59
 */

namespace ProjectBundle\Manager;

use AppBundle\Manager\BaseManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use ProjectBundle\Entity\Build;
use ProjectBundle\Entity\CompanyTest;
use AppBundle\Core\CmdShell;


class CompanyTestManager extends BaseManager
{
    protected $em;
    protected $container;

    public function __construct(EntityManager $em, $container)
    {
        $this->em = $em;
        $this->container = $container;
    }

    public function getRepository()
    {
        return $this->em->getRepository('ProjectBundle:CompanyTest');
    }
}
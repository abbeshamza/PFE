<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 11/04/16
 * Time: 12:58
 */

namespace ProjectBundle\Manager;
use AppBundle\Manager\BaseManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use ProjectBundle\Entity\Project;
use ProjectBundle\Entity\Build;
use ProjectBundle\Form\ProjectType;
use AppBundle\Core\CmdShell;


class BuildManager extends BaseManager
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
        return $this->em->getRepository('ProjectBundle:Build');
    }

    public  function buildValidation(Build $build)
    {
        $validator = $this->container->get('validator');
        $errors = $validator->validate($build);
        if (count($errors) > 0)
        {
            return false ;
        }
        else
            return true ;
    }
    public function createBuildFromRequest(Request $req)
    {
        $entity = new Build();
        $entity->setName($req->get('name'));
        $entity->setIsDeleted('no');
        $projectManager =  $this->container->get('test_project.project_manager');
        $project = $projectManager->loadProjectById($req->get('project'));
        $entity->setProject($project);

        return $entity;
    }
    public function loadBuildById($id){
        return $this->getRepository()->findOneBy(array('id' => $id));
    }

    public function loadBuildByName($name){
        return $this->getRepository()->findOneBy(array('name' => $name));
    }

    public function loadBuilds(){
        return $this->getRepository()->findAll();
    }


    public function loadBuildsByProject(Request $req){
        $id=$req->get('project');
        $projectManager = $this->container->get('test_project.project_manager');
        $project = $projectManager->loadProjectById($id);
        return $this->getRepository()->findByProject($project);
    }

    public function addBuild(Build $build){
        $this->persistAndFlush($build);
        $cmd= new CmdShell();
        $cmd->createFolder("functional/".$build->getProject()->getId(),$build->getId());
        $cmd->createFolder("_data/".$build->getProject()->getId(),$build->getId());
        $cmd->createFolder("_output/".$build->getProject()->getId(),$build->getId());


    }

}
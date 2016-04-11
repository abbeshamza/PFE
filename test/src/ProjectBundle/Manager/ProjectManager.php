<?php
/**
 * Created by PhpStorm.
 * User: hab
 * Date: 22/03/16
 * Time: 12:22
 */

namespace ProjectBundle\Manager;
use AppBundle\Manager\BaseManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use ProjectBundle\Entity\Project;
use ProjectBundle\Form\ProjectType;
use AppBundle\Core\CmdShell;


class ProjectManager extends BaseManager
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
        return $this->em->getRepository('ProjectBundle:Project');
    }

    public function createProjectFromRequest(Request $req)
    {
        $entity = new Project();
        $entity->setName($req->get('name'));
        $entity->setStatus("open");
        $entity->setIsDeleted("no");
        return $entity;
    }
    public  function projectValidation(Project $project)
    {
        $validator = $this->container->get('validator');
        $errors = $validator->validate($project);
        if (count($errors) > 0)
        {
            return false ;
        }
        else
           return true ;
    }

    public function loadProjectById($id){
        return $this->getRepository()->findOneBy(array('id' => $id));
    }

    public function loadProjetByName($name){
        return $this->getRepository()->findOneBy(array('name' => $name));
    }

    public function loadProjects(){
        return $this->getRepository()->findAll();
    }

    public function addProject(Project $project){


        $this->persistAndFlush($project);
        $cmd= new CmdShell();
        $cmd->createFolder("functional",$project->getId());
        $cmd->createFolder("_data",$project->getId());
        $cmd->createFolder("_output",$project->getId());
        $cmd->createFunctionnalTest($project->getId(),"hh");

    }
    public function deleteProject( $id)
{

}


}
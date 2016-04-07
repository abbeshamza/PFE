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
use ProjectBundle\Entity\Projet;
use ProjectBundle\Form\ProjetType;
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
        return $this->em->getRepository('ProjectBundle:Projet');
    }

    public function createProjectFromRequest(Request $req)
    {
        $entity = new Projet();
        $entity->setNameProject($req->get('name'));
        $entity->setStatus($req->get('status'));
        $entity->setFolderName();
        return $entity;
    }
    public  function projectValidation(Projet $projet)
    {
        $validator = $this->container->get('validator');
        $errors = $validator->validate($projet);
        if (count($errors) > 0)
        {
            return false ;
        }
        else
           return true ;
    }

    public function loadProjetById($id){
        return $this->getRepository()->findOneBy(array('id' => $id));
    }

    public function loadProjetByName($name){
        return $this->getRepository()->findOneBy(array('name' => $name));
    }

    public function loadProjets(){
        return $this->getRepository()->findAll();
    }

    public function addProjet(Projet $projet){
        $cmd= new CmdShell();
        $cmd->createFolder("functional",$projet->getFolderName());
        $cmd->createFolder("_output",$projet->getFolderName());
        $cmd->createFunctionnalTest($projet->getFolderName(),"hh");
        $this->persistAndFlush($projet);
    }
    public function deleteProject( $id)
{

}


}
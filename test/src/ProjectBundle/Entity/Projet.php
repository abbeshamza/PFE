<?php

namespace ProjectBundle\Entity;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\PreSerialize;
use JMS\Serializer\Annotation as Serialiser ;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
/**
 * @ExclusionPolicy("all")
 *
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjetRepository")
 * @ORM\Table("projets")
 * @ORM\Entity
 */



class Projet extends Bundle
{

    /**
     * @Expose
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Expose
     * @Assert\NotBlank(message="Nom projet requis")
     * @ORM\Column(name="nom_projet", type="string", length=255, nullable=true)
     */
    private $nameProject;
    /**
     *
     * @ORM\Column(name="nom_dossier", type="string", length=255, nullable=true)
     */
    private $folderName;


    /**
     * @Expose
     * @Assert\NotBlank(message="Nom projet requis")
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Projet
     */
    public function setNameProject($nom)
    {
        $this->nameProject = $nom;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getNameProject()
    {
        return $this->nameProject;
    }

    /**
     * Set nomDossier
     *
     * @return Projet
     */
    public function setFolderName()
    {
        $this->folderName = $this->getNameProject();

        return $this;
    }

    /**
     * Get nomDossier
     *
     * @return string
     */
    public function getFolderName()
    {
        return $this->folderName;
    }


    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Projet
     */
    public function setStatus($statut)
    {
        $this->status = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

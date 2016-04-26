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
 * Build
 ** @ExclusionPolicy("all")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\BuildRepository")
 * @ORM\Table(name="Build", indexes={@ORM\Index(name="fk_Build_project1_idx", columns={"project_id"})})
 * @ORM\Entity
 */
class Build
{
    /**
     *  @Expose
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *  @Expose
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="name_folder", type="string", length=45, nullable=true)
     */
    private $nameFolder;

    /**
     * @var string
     *
     * @ORM\Column(name="is_deleted", type="string", length=45, nullable=true)
     */
    private $isDeleted;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CompanyTest", mappedBy="build")
     */
    private $companyTestcompanyTest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companyTestcompanyTest = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Build
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nameFolder
     *
     * @param string $nameFolder
     *
     * @return Build
     */
    public function setNameFolder($nameFolder)
    {
        $this->nameFolder = $nameFolder;

        return $this;
    }

    /**
     * Get nameFolder
     *
     * @return string
     */
    public function getNameFolder()
    {
        return $this->nameFolder;
    }

    /**
     * Set isDeleted
     *
     * @param string $isDeleted
     *
     * @return Build
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return string
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set project
     *
     * @param \ProjectBundle\Entity\Project $project
     *
     * @return Build
     */
    public function setProject(\ProjectBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \ProjectBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Add companyTestcompanyTest
     *
     * @param \ProjectBundle\Entity\CompanyTest $companyTestcompanyTest
     *
     * @return Build
     */
    public function addCompanyTestcompanyTest(\ProjectBundle\Entity\CompanyTest $companyTestcompanyTest)
    {
        $this->companyTestcompanyTest[] = $companyTestcompanyTest;

        return $this;
    }

    /**
     * Remove companyTestcompanyTest
     *
     * @param \ProjectBundle\Entity\CompanyTest $companyTestcompanyTest
     */
    public function removeCompanyTestcompanyTest(\ProjectBundle\Entity\CompanyTest $companyTestcompanyTest)
    {
        $this->companyTestcompanyTest->removeElement($companyTestcompanyTest);
    }

    /**
     * Get companyTestcompanyTest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanyTestcompanyTest()
    {
        return $this->companyTestcompanyTest;
    }
}

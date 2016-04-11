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
 * CompanyTest
 * @ExclusionPolicy("all")
 *
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\CompanyRepository")
 * @ORM\Table(name="Company_test")
 * @ORM\Entity
 */
class CompanyTest
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Build", inversedBy="companyTestcompanyTest")
     * @ORM\JoinTable(name="build_has_companies",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Company_test_idCompany_test", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Build_id", referencedColumnName="id")
     *   }
     * )
     */
    private $build;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TestCase", mappedBy="companyTestCompanyTest")
     */
    private $testCaseTestCase;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->build = new \Doctrine\Common\Collections\ArrayCollection();
        $this->testCaseTestCase = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return CompanyTest
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
     * @return CompanyTest
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
     * @return CompanyTest
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
     * Add build
     *
     * @param \ProjectBundle\Entity\Build $build
     *
     * @return CompanyTest
     */
    public function addBuild(\ProjectBundle\Entity\Build $build)
    {
        $this->build[] = $build;

        return $this;
    }

    /**
     * Remove build
     *
     * @param \ProjectBundle\Entity\Build $build
     */
    public function removeBuild(\ProjectBundle\Entity\Build $build)
    {
        $this->build->removeElement($build);
    }

    /**
     * Get build
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Add testCaseTestCase
     *
     * @param \ProjectBundle\Entity\TestCase $testCaseTestCase
     *
     * @return CompanyTest
     */
    public function addTestCaseTestCase(\ProjectBundle\Entity\TestCase $testCaseTestCase)
    {
        $this->testCaseTestCase[] = $testCaseTestCase;

        return $this;
    }

    /**
     * Remove testCaseTestCase
     *
     * @param \ProjectBundle\Entity\TestCase $testCaseTestCase
     */
    public function removeTestCaseTestCase(\ProjectBundle\Entity\TestCase $testCaseTestCase)
    {
        $this->testCaseTestCase->removeElement($testCaseTestCase);
    }

    /**
     * Get testCaseTestCase
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTestCaseTestCase()
    {
        return $this->testCaseTestCase;
    }
}

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
 * TestCase
 * @ExclusionPolicy("all")
 *
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\TestCaseRepository")
 * @ORM\Table(name="test_case")
 * @ORM\Entity
 */
class TestCase
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
     * @ORM\Column(name="name_file", type="string", length=45, nullable=true)
     */
    private $nameFile;

    /**
     * @var string
     *
     * @ORM\Column(name="is_deleted", type="string", length=45, nullable=true)
     */
    private $isDeleted;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CompanyTest", inversedBy="testCaseTestCase")
     * @ORM\JoinTable(name="company_has_test_case",
     *   joinColumns={
     *     @ORM\JoinColumn(name="test_case_id_test_case", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Company_test_id_company_test", referencedColumnName="id")
     *   }
     * )
     */
    private $companyTestCompanyTest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companyTestCompanyTest = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TestCase
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
     * Set nameFile
     *
     * @param string $nameFile
     *
     * @return TestCase
     */
    public function setNameFile($nameFile)
    {
        $this->nameFile = $nameFile;

        return $this;
    }

    /**
     * Get nameFile
     *
     * @return string
     */
    public function getNameFile()
    {
        return $this->nameFile;
    }

    /**
     * Set isDeleted
     *
     * @param string $isDeleted
     *
     * @return TestCase
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
     * Add companyTestCompanyTest
     *
     * @param \ProjectBundle\Entity\CompanyTest $companyTestCompanyTest
     *
     * @return TestCase
     */
    public function addCompanyTestCompanyTest(\ProjectBundle\Entity\CompanyTest $companyTestCompanyTest)
    {
        $this->companyTestCompanyTest[] = $companyTestCompanyTest;

        return $this;
    }

    /**
     * Remove companyTestCompanyTest
     *
     * @param \ProjectBundle\Entity\CompanyTest $companyTestCompanyTest
     */
    public function removeCompanyTestCompanyTest(\ProjectBundle\Entity\CompanyTest $companyTestCompanyTest)
    {
        $this->companyTestCompanyTest->removeElement($companyTestCompanyTest);
    }

    /**
     * Get companyTestCompanyTest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanyTestCompanyTest()
    {
        return $this->companyTestCompanyTest;
    }
}

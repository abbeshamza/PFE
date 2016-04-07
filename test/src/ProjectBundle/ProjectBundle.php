<?php

namespace ProjectBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\Mapping as ORM;
/**
 * User
 *
 * @ORM\Table("users")
 * @ORM\Entity
 */
class ProjectBundle extends Bundle
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Assert\NotBlank(message="Nom projet requis")
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}


<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A sockettype
 * @package App\Entity
 *
 * @ORM\Entity()
 * @ApiResource()
 */
class Sockettype
{
    /**
     * @var int The id of this socket type
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of this socket type.
     *
     * @ORM\Column(type="text")
     */
    public $name;

    /**
     * @var Socket[] All Sockets for this socket type.
     *
     * @ORM\OneToMany(targetEntity="Socket", mappedBy="sockettype")
     */
    public $sockets;

    public function __construct()
    {
        $this->sockets = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


}
<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A socket
 * @package App\Entity
 *
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 * @ApiResource()
 */
class Socket
{

    /**
     * @var int The id of this socket.
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Sockettype The socket type of ths socket.
     *
     * @ORM\ManyToOne(targetEntity="Sockettype", inversedBy="sockettypes")
     * @Assert\NotBlank()
     */
    private $sockettype;

    /**
     * @var int The gpio of this socket.
     *
     * @ORM\Column(type="integer")
     */
    public $gpio;

    /**
     * @var int The bcm of this socket.
     *
     * @ORM\Column(type="integer")
     */
    public $bcm;

    /**
     * @var int The active flag of this socket.
     *
     * @ORM\Column(type="boolean")
     */
    public $active = false;

    /**
     * @var boolean The manually flag of this socket.
     *
     * @ORM\Column(type="boolean")
     */
    public $manually = false;

    /**
     * @var boolean The manually active flag of this socket.
     *
     * @ORM\Column(type="boolean", name="manually_active")
     */
    public $manuallyActive = false;

    /**
     * @var \DateTime The updated date of this socket.
     *
     * @ORM\Column(type="datetime", name="date_updated", nullable=true)
     */
    private $dateUpdated;

    /**
     * @ORM\PreUpdate()
     */
    public function onPreUpdate()
    {
        $this->dateUpdated = new \DateTime('now');
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Sockettype
     */
    public function getSockettype(): Sockettype
    {
        return $this->sockettype;
    }

    /**
     * @param Sockettype $sockettype
     */
    public function setSockettype(Sockettype $sockettype): void
    {
        $this->sockettype = $sockettype;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdated(): \DateTime
    {
        return $this->dateUpdated;
    }




}
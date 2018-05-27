<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A Socketaction
 * @package App\Entity
 *
 * @ORM\Entity()
 * @ApiResource()
 */
class Socketaction
{

    /**
     * @var int The id of this socket action.
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Socket A sockets for this socket action.
     *
     * @ORM\OneToOne(targetEntity="Socket")
     * @Assert\NotBlank
     */
    private $socket;

    /**
     * @var \DateTime The start date of this socket action.
     *
     * @ORM\Column(type="date", name="date_start")
     */
    public $dateStart;

    /**
     * @var \DateTime The end date of this socket action.
     *
     * @ORM\Column(type="date", name="date_end")
     */
    public $dateEnd;

    /**
     * @var string The start time of this socket action.
     *
     * @ORM\Column(type="time", name="time_start")
     */
    public $timeStart;

    /**
     * @var string The end time of this socket action.
     *
     * @ORM\Column(type="time", name="time_end")
     */
    public $timeEnd;

    /**
     * @var string The name of this socket action.
     *
     * @ORM\Column(type="text")
     */
    public $name;

    /**
     * @var string The description of this socket action.
     *
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @var int The weekdays of this socket action.
     *
     * @ORM\Column(type="integer")
     */
    public $weekdays;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Socket
     */
    public function getSocket(): Socket
    {
        return $this->socket;
    }

    /**
     * @param Socket $socket
     */
    public function setSocket(Socket $socket): void
    {
        $this->socket = $socket;
    }

}
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="message")
 * @UniqueEntity(fields={"title"}, message="no same titles!")
 * @ApiResource(
 * )
 * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
 */
class Message
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Length(max="80")
     */
    private $title;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Length(max="50000")
     */
    private $body;

    /**
     * @ORM\Column(name="`from`", type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $from;

    /**
     * @ORM\Column("`to`", type="integer", nullable=true)
     */
    private $to;

    /**
     * @ORM\Column(type="datetimetz", nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="datetimetz", nullable=true)
     */
    private $updated;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }
}

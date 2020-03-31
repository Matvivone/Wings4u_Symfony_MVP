<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectsRepository")
 */
class Project
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Country;

    /**
     * @var string
     * @ORM\Column(name="responsible", type="string", nullable=false)
     */
    private $Responsible;

    /**
     * @ORM\Column(type="text", nullable=true)
     */


    private $Content_status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Video_status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(?string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getResponsible(): ?string
    {
        return $this->Responsible;
    }


    public function setResponsible(string $Responsible): self
    {
        $this->Responsible = $Responsible;

        return $this;
    }

    public function getContentStatus(): ?string
    {
        return $this->Content_status;
    }

    public function setContentStatus(?string $Content_status): self
    {
        $this->Content_status = $Content_status;

        return $this;
    }

    public function getVideoStatus(): ?string
    {
        return $this->Video_status;
    }

    public function setVideoStatus(?string $Video_status): self
    {
        $this->Video_status = $Video_status;

        return $this;
    }
}

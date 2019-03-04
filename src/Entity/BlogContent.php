<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/*
 * documentation : https://github.com/cocur/slugify
 */
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogContentRepository")
 */
class BlogContent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="boolean")
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\BlogCategories", inversedBy="blogContent_ids")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_categorie;

    /**
     * BlogContent constructor.
     */
    public function __construct ()
    {
        $this->created_at = \DateTime::createFromFormat('Y-m-d H:i:s',date('Y-m-d H:i:s'));
    }

    /**
     * @return string the slug of title
     */
    public function getSlug() :string
    {
        return (new Slugify())->slugify($this->title);
    }

    /**
     * @return string created_at formated d/m/Y
     * @throws \Exception
     */
    public function getDate() :string
    {
        return $this->getCreatedAt()->format('d-m-Y');
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getIdCategorie(): ?BlogCategories
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?BlogCategories $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    /**
     * @param mixed $type
     * @return BlogContent
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}

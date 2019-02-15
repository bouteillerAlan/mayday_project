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
     * @ORM\Column(type="integer")
     */
    private $id_cat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

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
     * BlogContent constructor.
     */
    public function __construct ()
    {
        $s = date('Y-m-d H:i:s'); //trow string 2001-03-10 17:16:18 (sql DATETIME format)
        $date = \DateTime::createFromFormat('Y-m-d H:i:s',$s); //return a object(DateTime)
        $this->created_at = $date;
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCat(): ?int
    {
        return $this->id_cat;
    }

    public function setIdCat(int $id_cat): self
    {
        $this->id_cat = $id_cat;

        return $this;
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
}

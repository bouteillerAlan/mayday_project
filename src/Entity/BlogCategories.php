<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogCategoriesRepository")
 */
class BlogCategories
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BlogContent", mappedBy="id_categorie")
     */
    private $blogContent_ids;

    public function __construct()
    {
        $this->blogContent_ids = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return Collection|BlogContent[]
     */
    public function getBlogContentIds(): Collection
    {
        return $this->blogContent_ids;
    }

    public function addBlogContentId(BlogContent $blogContentId): self
    {
        if (!$this->blogContent_ids->contains($blogContentId)) {
            $this->blogContent_ids[] = $blogContentId;
            $blogContentId->setIdCategorie($this);
        }

        return $this;
    }

    public function removeBlogContentId(BlogContent $blogContentId): self
    {
        if ($this->blogContent_ids->contains($blogContentId)) {
            $this->blogContent_ids->removeElement($blogContentId);
            // set the owning side to null (unless already changed)
            if ($blogContentId->getIdCategorie() === $this) {
                $blogContentId->setIdCategorie(null);
            }
        }

        return $this;
    }
}

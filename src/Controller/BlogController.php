<?php namespace App\Controller;

/*
 *
 */

use App\Entity\BlogContent;
use App\Repository\BlogContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController {

    /**
     * @var BlogContentRepository
     */
    private $blogcontent;

    /**
     * BlogController constructor.
     * @param BlogContentRepository $repo
     */
    public function __construct (BlogContentRepository $repo)
    {
        $this->blogcontent = $repo;
    }

    public function unique (BlogContent $entity, string $slug) :Response
    {
        if ($entity->getSlug() !== $slug) {
            return $this->redirectToRoute('blog.unique', [
               'id' => $entity->getId(),
               'slug' => $entity->getSlug()
            ], 301);
        }

        return $this->render('blog/unique.html.twig', [
            'result' => $entity
        ]);
    }

}

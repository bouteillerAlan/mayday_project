<?php namespace App\Controller\Admin;

/*
 *
 */

use App\Entity\BlogContent;
use App\Form\BlogContentType;
use App\Repository\BlogContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminBlogController extends AbstractController {

    /**
     * @var BlogContentRepository
     */
    private $blogcontent;

    /**
     * AdminBlogController constructor.
     * @param BlogContentRepository $repository
     */
    public function __construct(BlogContentRepository $repository)
    {
        $this->blogcontent = $repository;
    }


    public function index () :Response
    {
        $result = $this->blogcontent->findAll();

        return $this->render('admin\admin.home.html.twig', [
            'result' => $result
        ]);
    }

    public function unique (BlogContent $entity) :Response
    {
        $form = $this->createForm(BlogContentType::class, $entity);


        return $this->render('admin\admin.unique.html.twig', [
            'result' => $entity,
            'form' => $form->createView()
        ]);
    }

}
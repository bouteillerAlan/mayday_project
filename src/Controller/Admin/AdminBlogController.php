<?php namespace App\Controller\Admin;

/*
 *
 */

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

}
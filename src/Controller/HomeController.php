<?php namespace App\Controller;

/*
 *
 */

use App\Repository\BlogContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

    /**
     * @var BlogContentRepository
     */
    private $blogcontent;

    /**
     * HomeController constructor.
     * @param BlogContentRepository $repo
     */
    public function __construct (BlogContentRepository $repo)
    {
        $this->blogcontent = $repo;
    }

    public function index () :Response
    {
        $result = $this->blogcontent->getAllValid();

        return $this->render('pages/home.html.twig', [
            'result' => $result
        ]);
    }

}

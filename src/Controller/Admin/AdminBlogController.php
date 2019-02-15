<?php namespace App\Controller\Admin;

/*
 *
 */

use App\Entity\BlogContent;
use App\Form\BlogContentType;
use App\Repository\BlogContentRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminBlogController extends AbstractController {

    /**
     * @var BlogContentRepository
     * @var ObjectManager
     */
    private $blogcontent;
    private $em;

    /**
     * AdminBlogController constructor.
     * @param BlogContentRepository $repository
     * @param ObjectManager $em
     */
    public function __construct(BlogContentRepository $repository, ObjectManager $em)
    {
        $this->blogcontent = $repository;
        $this->em = $em;
    }


    public function index () :Response
    {
        $result = $this->blogcontent->findAll();

        return $this->render('admin\admin.home.html.twig', [
            'result' => $result
        ]);
    }

    public function unique (BlogContent $entity, Request $request) :Response
    {
        $form = $this->createForm(BlogContentType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin\admin.unique.html.twig', [
            'result' => $entity,
            'form' => $form->createView()
        ]);
    }

    public function new (Request $request) :Response
    {
        $entity = new BlogContent();
        $form = $this->createForm(BlogContentType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($entity);
            $this->em->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin\admin.new.html.twig', [
            'result' => $entity,
            'form' => $form->createView()
        ]);
    }

}
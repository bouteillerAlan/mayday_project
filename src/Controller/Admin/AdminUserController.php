<?php namespace App\Controller\Admin;
/*
 *
 */

use App\Entity\BlogUser;
use App\Form\BlogUserType;
use App\Repository\BlogUserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminUserController extends AbstractController
{
    /**
     * @var ObjectManager
     */
    private $em;

    /**
     * @var BlogUserRepository
     */
    private $repository;

    /**
     * AdminUserController constructor.
     * @param ObjectManager $em
     * @param BlogUserRepository $repository
     */
    public function __construct(ObjectManager $em, BlogUserRepository $repository)
    {
        $this->em = $em;
        $this->repository = $repository;
    }

    /**
     * @return Response
     */
    public function index () :Response
    {
        $result = $this->repository->findAll();

        return $this->render('admin\admin.user.html.twig', [
           'result' => $result
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function new (Request $request) :Response
    {
        $entity = new BlogUser();
        $form = $this->createForm(BlogUserType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entity->setPassword(password_hash($entity->getPassword(), PASSWORD_BCRYPT, ['cost' => 12]));

            $this->em->persist($entity);
            $this->em->flush();
            $this->addFlash('success', 'Vous avez bien créé l\'utilisateur "'.$entity->getUsername().'"');
            return $this->redirectToRoute('admin.user');
        }

        return $this->render('admin\admin.user.new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param BlogUser $entity
     * @param Request $request
     * @return Response
     */
    public function edit (BlogUser $entity, Request $request) :Response
    {
        $form = $this->createForm(BlogUserType::class, $entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Vous avez bien édité l\'utilisateur "'.$entity->getUsername().'"');
            return $this->redirectToRoute('admin.user');
        }
        return $this->render('admin\admin.user.edit.html.twig', [
            'result' => $entity,
            'form' => $form->createView()
        ]);
    }

    /**
     * @param BlogUser $entity
     * @param Request $request
     * @return Response
     */
    public function delete (BlogUser $entity, Request $request) :Response
    {
        $token = $this->isCsrfTokenValid('delete'.$entity->getId(), $request->get('_token'));

        if ($token) {
            $this->em->remove($entity);
            $this->em->flush();
            $this->addFlash('success', 'Vous avez bien supprimé l\'utilisateur "'.$entity->getUsername().'"');
        } elseif (!$entity) {
            $this->addFlash('error', 'Hu ho! I made a mistake with the token ¯\_(ツ)_/¯');
        }
        return $this->redirectToRoute('admin.user');

    }

}

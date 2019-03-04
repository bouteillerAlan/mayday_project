<?php namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\BlogContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 * @package App\Controller
 */
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


    /**
     * @param Request $request
     * @param ContactNotification $notification
     * @return Response
     */
    public function index (Request $request, ContactNotification $notification) :Response
    {
        $blog = $this->blogcontent->getAllValid('blog');
        $note = $this->blogcontent->getAllValid('note');

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notifyByMail($contact);
            $this->addFlash('success', 'Message envoyé!');
            return $this->redirect('/#contact');
        }

        return $this->render('pages/home.html.twig', [
            'blog' => $blog,
            'note' => $note,
            'form' => $form->createView()
        ]);
    }



}

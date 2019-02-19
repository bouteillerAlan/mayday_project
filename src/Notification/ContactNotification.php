<?php namespace App\Notification;
/*
 *
 */

use App\Entity\Contact;
use Twig\Environment;

class ContactNotification {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    /**
     * @var Environment
     */
    private $render;

    /**
     * ContactNotification constructor.
     * @param \Swift_Mailer $mailer
     * @param Environment $render
     */
    public function __construct (\Swift_Mailer $mailer, Environment $render)
    {
        $this->mailer = $mailer;
        $this->render = $render;
    }

    public function notifyByMail (Contact $contact)
    {
        $message = (new \Swift_Message('[libercodex] Nouveau mail de la part de '.$contact->getLastname() .' '. $contact->getFirstname()))
            ->setFrom('noreply@libercodex.com')
            ->setTo('bouteiller.alan@gmail.com')
            ->setReplyTo($contact->getEmail())
            ->setBody($this->render->render('mail/mail.html.twig', [
                'contact' => $contact
            ]), 'text/html');

        $this->mailer->send($message);
    }

}

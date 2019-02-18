<?php namespace App\Controller\Admin;

/*
 *
 */

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminAuthenticationController extends AbstractController {

    public function login (AuthenticationUtils $aut) :Response
    {
        $lastUser = $aut->getLastUsername();
        $lastError = $aut->getLastAuthenticationError();

        return $this->render('admin\admin.login.html.twig', [
            'lastUser' => $lastUser,
            'error' => $lastError
        ]);
    }

}

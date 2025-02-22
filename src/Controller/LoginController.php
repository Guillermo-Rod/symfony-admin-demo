<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{

    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();

        return $this->render('auth/login/index.html.twig', [
            'last_username' => $lastUserName,
            'error' => $error,
        ]);
    }

    public function logout(Security $security): Response 
    {
        $response = $security->logout(false);

        return $this->redirectToRoute('app_auth_login');
    }
}

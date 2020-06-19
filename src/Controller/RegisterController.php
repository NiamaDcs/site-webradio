<?php

namespace App\Controller;

use App\Entity\Users;
use App\Security\UsersAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Unirest;


class RegisterController extends BaseController
{

    
     /**
     * @Route("/register", name="user.registration", methods={"POST"})
     */

    public function register()
    {
        return $this->render('page/home.html.twig');
    }

    

         
}

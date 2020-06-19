<?php

namespace App\Controller\users;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


    /**
     * @Route("/profile")
     */
class ProfilController extends BaseController
{
  
     /**
     * @Route("/", name="profile.index", methods={"GET"})
     */
    public function index() :Response
    {
        return $this->render("users/base.html.twig");      
    }

   

    /**
     * @Route("/setting", name="setting.index", methods={"GET"})
     */
    public function setting() :Response
    {
        return $this->render("users/settings/base.html.twig"); 
    }
    
}
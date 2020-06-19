<?php

namespace App\Controller\users;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Unirest;

    /**
     * @Route("/radios")
     */
class RadiosController extends BaseController {

     /**
     * @Route("/", name="radios.index", methods={"GET"})
     */
    public function index()
    {
        return $this->render("users/radios/base.html.twig"); 
    }

    
}
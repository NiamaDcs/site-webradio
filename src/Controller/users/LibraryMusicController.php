<?php

namespace App\Controller\users;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/user/library")
     */
class LibraryMusicController extends BaseController{

     /**
     * @Route("/", name="profile.library.index", methods={"GET"})
     */
    public function index() :Response
    {
        return $this->render("users/musicLibrary/base.html.twig");
    }
}
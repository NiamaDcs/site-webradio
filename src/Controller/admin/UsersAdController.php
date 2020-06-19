<?php

namespace App\Controller\admin;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Unirest;

/**
* @Route("/admin/users")
*/
class UsersAdController extends BaseController
{
    /**
    * @Route("/", name="admin.users.index",)
    */
    public function index()
    {
        return $this->render('admin/user/index.html.twig');
    }
       
    /**
    * @Route("/new", name="admin.users.new", methods={"GET"})
    */
    public function new()
    {
        return $this->render('admin/user/new/new.html.twig');
    }


    /**
     * @Route("/edit/{id}", name="admin.users.edit", methods={"GET"})
     */
    public function edit()
    { 
        return $this->render('admin/user/edit/edit.html.twig');
    }

  

    

}
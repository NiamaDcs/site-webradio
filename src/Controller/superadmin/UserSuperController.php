<?php

namespace App\Controller\superadmin;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Unirest;

/**
* @Route("/superadmin/users")
*/
class UserSuperController extends BaseController
{
    /**
    * @Route("/", name="superadmin.users.index",)
    */
    public function index()
    {
        return $this->render('superAdmin/user/index.html.twig');
    }

    /**
    * @Route("/new", name="superadmin.users.new")
    */
    public function new()
    {
        return $this->render('superAdmin/user/new/new.html.twig');
    }

    /**
     * @Route("/edit/{id}", name="superadmin.users.edit")
     */
    public function edit()
    {
        return $this->render('superAdmin/user/edit/edit.html.twig');
    }

    

    

}

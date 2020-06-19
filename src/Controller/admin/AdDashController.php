<?php

namespace App\Controller\admin;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


    /**
     * @Route("/admin")
     */
class AdDashController extends BaseController
{

    /**
     * @Route("/", name="admin.index", methods={"GET"})
     */
    public function index() 
    {
        return $this->render('admin/base.html.twig');
    }

    
    /**
     * @Route("/setting", name="admin.setting.index")
     */
    public function settings()
    {
        return $this->render("admin/settings/base.html.twig"); 
    }



}
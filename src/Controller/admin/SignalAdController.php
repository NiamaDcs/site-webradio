<?php

namespace App\Controller\admin;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Unirest;


/**
* @Route("/admin/signal")
*/
class SignalAdController extends BaseController 
{
    /**
     * @Route("/", name="admin.signal.index")
     *
     * @return void
     */
    public function index()
    {
        return $this->render('admin/signalements/base.html.twig');
    }

    public function edit()
    {
        
    }
}
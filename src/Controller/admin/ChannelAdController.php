<?php

namespace App\Controller\admin;

use Symfony\Component\Routing\Annotation\Route;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Unirest;

/**
 * @Route("/admin/channel")
 */
class ChannelAdController extends BaseController {

    /**
    * @Route("/", name="admin.channel.index",  methods={"GET"})
    */
    public function index(Request $request) 
    {
        return $this->render('admin/channel/base.html.twig');
    }
    

    /**
    * @Route("/edit/{id}", name="admin.channel.edit", methods={"GET"})
    */
    public function edit() 
    {
        return $this->render('admin/channel/editChannel/editChannel.html.twig');
    }

   
}
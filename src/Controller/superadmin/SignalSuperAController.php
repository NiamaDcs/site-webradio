<?php 

namespace App\Controller\superadmin;

use App\Controller\BaseController;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/superadmin/signal")
*/
class SignalSuperAController extends BaseController 
{
    /**
     * @Route("/", name="superadmin.signal.index")
     *
     * @return void
     */
    public function index()
    {
        return $this->render('superAdmin/signalements/base.html.twig');
    }

    public function edit()
    {
        
    }
}
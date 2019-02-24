<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:Default:index.html.twig');
    }
    public function index2Action()
    {
        return $this->render('MyAppUserBundle:BackOffice:index.html.twig');
    }
    public function eventAfficheAction()
    {
        return $this->render('MyAppUserBundle:BackOffice:Event.html.twig');
    }
    public function ReponseAction(Request $req)
    {
        $d = $req->request->get('d');
        die('OK');
    }


}

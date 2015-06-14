<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartController extends Controller
{

    public function indexAction()
    {


        return $this->render("AppBundle:Start:base.html.twig");
    }
}

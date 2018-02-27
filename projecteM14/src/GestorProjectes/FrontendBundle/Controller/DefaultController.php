<?php

namespace GestorProjectes\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestorProjectesFrontendBundle:Default:index.html.twig');
    }
}

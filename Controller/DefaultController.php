<?php

namespace Kore\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KorePageBundle:Default:index.html.twig');
    }
}

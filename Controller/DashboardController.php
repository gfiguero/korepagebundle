<?php

namespace Kore\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('KorePageBundle:Dashboard:index.html.twig');
    }
}

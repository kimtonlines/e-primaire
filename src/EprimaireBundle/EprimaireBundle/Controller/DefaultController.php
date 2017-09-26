<?php

namespace EprimaireBundle\EprimaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EprimaireBundle:Default:index.html.twig');
    }
}

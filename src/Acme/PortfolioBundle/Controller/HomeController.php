<?php

namespace Acme\PortfolioBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 4/06/14
 * Time: 17:35
 */

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'AcmePortfolioBundle:Home:index.html.twig'
        );
    }

    public function aboutAction()
    {
        return $this->render(
            'AcmePortfolioBundle:Home:about.html.twig'
        );
    }
}
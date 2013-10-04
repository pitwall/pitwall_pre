<?php

namespace PitWall\PaginasEstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($pagina)
    {
        return $this->render('PitWallPaginasEstaticasBundle:Default:'.$pagina.'.html.twig');
    }
}

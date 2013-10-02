<?php

namespace PitWall\PaginaPrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
    public function indexAction() {
        return $this->render('PitWallPaginaPrincipalBundle:Default:index.html.twig');
    }

    public function contactoAction() {
        return $this->render('PitWallPaginaPrincipalBundle:Default:contacto.html.twig');
    }
}

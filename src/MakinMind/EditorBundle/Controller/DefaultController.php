<?php

namespace MakinMind\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MakinMindEditorBundle:Default:index.html.twig', array('name' => $name));
    }
}

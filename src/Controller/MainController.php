<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render(view:'main/index.html.twig');


    }
    #[Route('/custom', name: 'custom')]
    public function custom(): Response {
        return $this->render(view:'main/custom.html.twig');
    }

    #[Route('/welcome/{slug}', name: 'welcome')]
    public function welcome(Request $request)
    {
        $slug = $request->get('slug');
        return $this ->render(view:'main/welcome.html.twig',parameters:[
            'slug'  => $slug
        ]);
    }
}

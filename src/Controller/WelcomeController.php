<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig');
    }

    /**
     * @Route(
     *     "hello-page/{name}",
     *     name="hello_page",
     *     defaults={"name" = "my little pussycat"},
     *     requirements={"name" = "[A-Za-z]+"}
     *     )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function hello($name = 'Lilly')
    {

        return $this->render(
            'hello_page.html.twig',
            [
            'name' => $name
            ]
        );
    }
}

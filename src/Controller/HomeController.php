<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function home(\Twig_Environment $twig)
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        if (0 === count($products)) {
            die('error');
        }
        $content = $twig->render('product/index.html.twig', ['products' => $products]);
        $response = new Response();
        $response->setContent($content);
        return $response;
    }
}

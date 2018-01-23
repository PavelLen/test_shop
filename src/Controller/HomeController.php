<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductModification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function home(Environment $twig, Request $request)
    {
        $doctrine = $this->getDoctrine();
        $products = $doctrine->getRepository(Product::class)->findAll();

        $products = array_chunk($products, 3);

        $content = $twig->render('product/index.html.twig', ['products' => $products]);
        $response = new Response();
        $response->setContent($content);
        return $response;
    }

    /**
     * @Route("/about")
     */
    public function about(Environment $twig)
    {
        $content = $twig->render('other/about.html.twig');
        $response = new Response();
        $response->setContent($content);
        return $response;
    }

    /**
     * @Route("/show/{id}", requirements={"id" = "\d+"})
     * @Method({"GET", "POST"})
     */
    public function show(Environment $twig, $id)
    {
        $doctrine = $this->getDoctrine();
        $product = $doctrine->getRepository(Product::class)->find($id);
        $modification = $product->getModifications()[0];

        $content = $twig->render('product/show.html.twig', ['product' => $product, 'modification' => $modification]);
        $response = new Response();
        $response->setContent($content);
        return $response;
    }

    /**
     * @Route("/show/{id}/{modificationId}", requirements={"id" = "\d+"}, name="show_modification")
     * @Method({"GET", "POST"})
     */
    public function showModification(\Twig_Environment $twig, $id, $modificationId)
    {
        $doctrine = $this->getDoctrine();
        $product = $doctrine->getRepository(Product::class)->find($id);
        $modification = $product->getModifications()[0];
        $modification = $doctrine->getRepository(ProductModification::class)->find($modificationId);

        return new JsonResponse(['vendorCode' => $modification->getVendorCode(), 'color' => $modification->getColor(),
            'size' => $modification->getSize()]);
    }
}

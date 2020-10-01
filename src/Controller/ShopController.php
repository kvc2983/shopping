<?php


namespace App\Controller;


use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ShopController extends AbstractController
{
    /**
     * @Route("/shop/homepage")
     */
    public function homepage()
    {
        $stud = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();
       return $this->render('shop/shop.html.twig', ['data'=>$stud]);
    }
}
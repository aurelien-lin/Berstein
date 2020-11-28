<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
    *  / Action : Accueil
    */
    Public function index()
    {
        return $this->render('default/index.html.twig');
    }


    /**
     * Page / Action : detail_produit
     */
    public function detail_prod()
    {
        return $this->render('default/detail_prod.html.twig');
    }

    /**
     * Page / Action : horaires_cmd
     */
     public function horaires_cmd()
     {
         return $this->render('default/horaires_cmd.html.twig');
     }

    /**
     * Page / Action : restaurant
     */
     public function restaurant()
     {
         return $this->render('default/restaurant.html.twig');
     }

    /**
     * Page / Action : panier
     */
     public function panier()
     {
         return $this->render('default/panier.html.twig');
     }

    /**
     * Page / Action : paiement
     */
     public function paiement()
     {
         return $this->render('default/paiement.html.twig');
     }
}

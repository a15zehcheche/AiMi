<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;




class WebController extends AbstractController
{
    /**
     * @Route("/main")
     */
    public function main()
    {
        return $this->render('pages/main.html.twig');
    }

    /**
     * @Route("/login")
     */
    public function login()
    {
        return $this->render('pages/login.html.twig');
    }


    /**
     * @Route("/profile_setting")
     */
    public function userProfile()
    {
        return $this->render('pages/user_profile.html.twig');
    }

    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('pages/dashboard.html.twig');
    }

    /**
     * @Route("/afegirProtucte")
     */
    public function AfegirProducte()
    {
        return $this->render('forms/form_producte.html.twig');
    }

    /**
     * @Route("/afegirCategoria")
     */
    public function AfegirCategoria()
    {
        return $this->render('forms/form_categoria.html.twig');
    }

    /**
     * @Route("/afegirComercial")
     */
    public function afegirComercial()
    {
        return $this->render('forms/form_comercial.html.twig');
    }

    /**
     * @Route("/afegirCliente")
     */
    public function afegirCliente()
    {
        return $this->render('forms/form_cliente.html.twig');
    }

    /**
     * @Route("/crearFactura")
     */
    public function crearFactura()
    {
        return $this->render('forms/form_factura.html.twig');
    }

    /**
     * @Route("/crearDevolucion")
     */
    public function crearDevolucion()
    {
        return $this->render('forms/form_devolucion.html.twig');
    }


    /**
     * @Route("/llistarCategoria")
     */
    public function llistarCategoria()
    {
        return $this->render('llistar/llistar_categoria.html.twig');
    }

    /**
     * @Route("/llistarProducte")
     */
    public function llistarProducte()
    {
        return $this->render('llistar/llistar_producte.html.twig');
    }

    /**
     * @Route("/llistarComercial")
     */
    public function llistarComercial()
    {
        return $this->render('llistar/llistar_comercial.html.twig');
    }

    /**
     * @Route("/llistarCliente")
     */
    public function llistarCliente()
    {
        return $this->render('llistar/llistar_cliente.html.twig');
    }

    /**
     * @Route("/llistarFactura")
     */
    public function llistarFactura()
    {
        return $this->render('llistar/llistar_factura.html.twig');
    }

    /**
     * @Route("/llistarDevolucion")
     */
    public function llistarDevolucion()
    {
        return $this->render('llistar/llistar_devolucion.html.twig');
    }


    /**
     * @Route("/downloadFactura/{numFactura}")
     */
    public function downloadFactura($numFactura)
    {
        return $this->render('pages/download.html.twig',["numFactura"=>$numFactura]);
    }

    /**
     * @Route("/aumentarStock")
     */
    public function aumentarStock()
    {
        return $this->render('pages/aumentarStock.html.twig');
    }

    /**
     * @Route("/configuracion")
     */
    public function configuracion()
    {
        return $this->render('pages/config.html.twig');
    }

}
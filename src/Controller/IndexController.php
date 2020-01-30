<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/01/2020
 * Time: 00:45
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index()
    {

        return $this->render('registration/index.html.twig');

    }


    /**
     * @Route("/home/{slug}")
     */
    public function fire($slug)
    {

        return $this->render('registration/index.html.twig',[
            'title'=> ucwords(str_replace('-',' ',$slug)),]);
    }


}
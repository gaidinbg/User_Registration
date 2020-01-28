<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29/01/2020
 * Time: 00:45
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return new Response("first try");
    }

    /**
     * @Route("/petko/good-look")
     */
    public function show()
    {
        return new Response("Looking good");
    }

    /**
     * @Route("/petko/{slug}")
     */
    public function fire($slug)
    {
        return new Response(sprintf("Looking good: %s",$slug ));
    }


}
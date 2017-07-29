<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    /**
     * @Route("/shops", name="shops_list")
     * @Method({"GET"})
     */
    public function listAction()
    {
        return $this->json(['shops' => $this->getDoctrine()->getRepository(Shop::class)->findAll()]);
    }

}
<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Shop;
use AppBundle\Exception\JsonHttpException;
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

    /**
     * @Route("/shops/{id}", name="shop_show")
     * @Method({"GET"})
     */
    public function showAction($id)
    {
        /** @var Shop $shop */
        if (!($shop = $this->getDoctrine()->getRepository(Shop::class)->find($id))) {
            throw new JsonHttpException(404, 'Shop not found.');
        }
        return $this->json($shop);
    }

}
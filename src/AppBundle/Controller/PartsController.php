<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Part;
use AppBundle\Exception\JsonHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartsController extends Controller
{
    /**
     * @Route("/parts", name="parts_list")
     * @Method({"GET"})
     */
    public function listAction()
    {
        return $this->json($this->getDoctrine()->getRepository(Part::class)->findAll());
    }

    /**
     * @Route("/parts/{id}", name="part_show")
     * @Method({"GET"})
     */
    public function showPartAction($id)
    {
        /** @var Part $part */
        if (!($part = $this->getDoctrine()->getRepository(Part::class)->find($id))) {
            throw new JsonHttpException(404, 'Part not found.');
        }

        return $this->json([$part]);
    }

}
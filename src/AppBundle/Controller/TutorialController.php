<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TutorialController extends Controller
{
    /**
     * @Route("/tutorials", name="tutorials_list")
     * @Method({"GET"})
     */
    public function listAction()
    {
        return $this->json([]);
    }

}
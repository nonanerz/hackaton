<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tutorial;
use AppBundle\Exception\JsonHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class TutorialController extends Controller
{
    /**
     * @Route("/tutorials", name="tutorials_list")
     * @Method({"GET"})
     */
    public function listAction()
    {
        return $this->json(['tutorials' => $this->getDoctrine()->getRepository(Tutorial::class)->findBy([], ['rating' => 'DESC'])]);
    }

    /**
     * @Route("/tutorials/{id}", name="tutorials_watch")
     * @Method({"GET"})
     */
    public function watchAction($id)
    {
        /** @var Tutorial $tutorial */
        if (!($tutorial = $this->getDoctrine()->getRepository(Tutorial::class)->find($id))) {
            throw new JsonHttpException(404, 'Tutorial not found.');
        }
        return $this->json($tutorial, 200, [], [AbstractNormalizer::GROUPS => ['Details']]);
    }

    /**
     * @Route("/tutorials/{id}")
     * @Method({"PUT"})
     */
    public function incrementViewAction($id)
    {
        /** @var Tutorial $tutorial */
        if (($tutorial = $this->getDoctrine()->getRepository(Tutorial::class)->find($id))) {

            $tutorial->setRating($tutorial->getRating() + 1);
            $this->getDoctrine()->getManager()->flush();

        }

        return $this->json($tutorial);
    }

}
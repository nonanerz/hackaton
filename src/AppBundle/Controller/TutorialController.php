<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tutorial;
use AppBundle\Exception\JsonHttpException;
use AppBundle\Normalizer\TutorialNormalizer;
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
    public function listAction(TutorialNormalizer $normalizer)
    {
        return $this->json(['tutorials' => $normalizer->normalize($this->getDoctrine()->getRepository(Tutorial::class)->findAll())]);
    }

    /**
     * @Route("/tutorials/{id}", name="tutorials_watch")
     * @Method({"GET"})
     */
    public function watchAction($id, TutorialNormalizer $normalizer)
    {
        /** @var Tutorial $tutorial */
        if (!($tutorial = $this->getDoctrine()->getRepository(Tutorial::class)->find($id))) {
            throw new JsonHttpException(404, 'Tutorial not found.');
        }
        return $this->json($normalizer->normalize($this->getDoctrine()->getRepository(Tutorial::class)->find($id), [], [AbstractNormalizer::GROUPS => ['Details']]));
    }

}
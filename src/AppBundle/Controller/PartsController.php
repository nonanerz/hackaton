<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Part;
use AppBundle\Entity\PartCategory;
use AppBundle\Exception\JsonHttpException;
use AppBundle\Form\FormType\PartFilterType;
use AppBundle\Form\Model\Filter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PartsController extends Controller
{
    /**
     * @Route("/parts", name="part_list")
     * @Method({"GET"})
     */
    public function listAction(Request $request)
    {
        $partFilter = new Filter();

        if ($request->query->all()) {
            $form = $this->createForm(PartFilterType::class, $partFilter);

            $form->handleRequest($request);


            if (!$form->isValid()) {
                $out = [];
                foreach ($form->getErrors(true) as $error) {
                    $out[$error->getOrigin()->getName()] = $error->getMessage();
                }
                throw new JsonHttpException(400, 'Bad Request', $out);
            }
        }

        $parts = $this->getDoctrine()->getRepository(Part::class)->selectByFilter($partFilter);

        return $this->json(['parts' => $parts]);
    }

    /**
     * @Route("/parts/{id}", name="part_show")
     * @Method({"GET"})
     */
    public function showAction($id)
    {
        /** @var Part $part */
        if (!($part = $this->getDoctrine()->getRepository(Part::class)->find($id))) {
            throw new JsonHttpException(404, 'Part not found.');
        }

        return $this->json($part);
    }

}
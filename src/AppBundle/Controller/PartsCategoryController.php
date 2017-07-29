<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PartCategory;
use AppBundle\Exception\JsonHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartsCategoryController extends Controller
{
    /**
     * @Route("/categories", name="categories_list")
     * @Method({"GET"})
     */
    public function listAction()
    {
        return $this->json($this->getDoctrine()->getRepository(PartCategory::class)->findAll());
    }

    /**
     * @Route("/categories/{id}", name="categories_show")
     * @Method({"GET"})
     */
    public function showCategoryAction($id)
    {
        /** @var PartCategory $category */
        if (!($category = $this->getDoctrine()->getRepository(PartCategory::class)->find($id))) {
            throw new JsonHttpException(404, 'Category not found.');
        }

        return $this->json(['parts' => $category->getParts()]);
    }

}
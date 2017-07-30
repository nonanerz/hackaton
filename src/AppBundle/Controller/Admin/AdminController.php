<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\S3\S3File;
use AppBundle\Form\FormType\PartType;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminController extends BaseAdminController
{
    public function prePersistEntity($entity)
    {
        if ($entity->getTmpFile()) {

            $s3file = new S3File(sprintf('parts/%s', $entity->getName()));
            /** @var UploadedFile $tmpFile */
            $tmpFile = $entity->getTmpFile();
            $s3file
                ->setContentType($tmpFile->getMimeType())
                ->setContent(file_get_contents($tmpFile->getRealPath()))
                ->setNameFile($tmpFile->getClientOriginalName());

            $entity->setImage($s3file);
            $this->getDoctrine()->getManager()->persist($s3file);

        }
    }

    public function preUpdatePartEntity($entity)
    {
        $s3file = new S3File('parts');

        /** @var UploadedFile $tmpFile */
        if ($tmpFile = $entity->getTmpFile()) {
            $s3file
                ->setContentType($tmpFile->getMimeType())
                ->setContent(file_get_contents($tmpFile->getRealPath()))
                ->setNameFile($tmpFile->getClientOriginalName());

            $entity->setImage($s3file);
            $this->getDoctrine()->getManager()->persist($s3file);
        }
    }

    public function createPartNewForm($entity)
    {
        return $this->createForm(PartType::class, $entity);
    }

    public function createPartEditForm($entity)
    {
        return $this->createForm(PartType::class, $entity);
    }
}

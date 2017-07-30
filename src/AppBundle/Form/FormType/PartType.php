<?php

namespace AppBundle\Form\FormType;


use AppBundle\Entity\Part;
use AppBundle\Entity\PartCategory;
use AppBundle\Entity\PartKind;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('description', TextType::class, ['required' => false])
            ->add('price', NumberType::class, ['required' => false])
            ->add('url', UrlType::class, [
                'required' => false,
                'label' => 'Website'
            ])
            ->add('tmpFile', FileType::class, [
                'required' => false,
                'label' => 'Photo'
                ])

            ->add('kind', EntityType::class, [
                'class' => PartKind::class,
                'choice_label' => 'name',
                'label' => 'Type'
            ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                /** @var Part $part */
                $part = $event->getData();
                $part->setCategory($part->getKind()->getCategory());
            })
            ->add('Submit', SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Part::class,
            'csrf_protection' => false,
        ]);
    }

}
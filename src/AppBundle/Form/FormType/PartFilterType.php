<?php

namespace AppBundle\Form\FormType;

use AppBundle\Entity\PartCategory;
use AppBundle\Entity\PartKind;
use AppBundle\Form\Model\Filter;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PartFilterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('afterId', TextType::class, ['required' => false])
            ->add('beforeId', TextType::class, ['required' => false])
            ->add('limit', ChoiceType::class, [
                'required' => false,
                'choices' => array_combine(Filter::getLimits(), Filter::getLimits())
            ])
            ->add('kind', EntityType::class, [
                'required' => false,
                'label' => 'Type',
                'class' => PartKind::class,
                'choice_label' => 'id'
            ])
            ->add('category', EntityType::class, [
                'required' => false,
                'class' => PartCategory::class,
                'choice_label' => 'id'
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Filter::class,
            'method' => Request::METHOD_GET,
            'csrf_protection' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return '';
    }
}
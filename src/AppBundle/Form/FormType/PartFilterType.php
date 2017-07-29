<?php

namespace AppBundle\Form\FormType;

use AppBundle\Form\Model\Filter;
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
            ->add('vilki', ChoiceType::class, [
                'required' => false,
                'placeholder' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('kolesa', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('zvezdy', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('perecluchateli', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('tormoza', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('kolodki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('ruli', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('pedali', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('kasety', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('tsepi', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('kruki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('oboda', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('stsepy', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('nasosy', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('bagazhniki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('fonari', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('zamki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('veloSumki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('krilya', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('shlem', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('perchatki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('ochki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('rukzaki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('kepki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('nakolenniki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('bachily', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('baffy', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('komputery', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('zvonki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('flyagi', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('gripsy', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('actionKamery', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('nakleiki', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
            ])
            ->add('podveskaKoles', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    '0' => false,
                    '1' => true
                ]
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
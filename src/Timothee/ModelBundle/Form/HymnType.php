<?php

namespace Timothee\ModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Timothee\ModelBundle\Form\MusicalPartType;

class HymnType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num',
                TextType::class,
                array(
                    'label' => 'Numéro du chant',
                    'attr' => array(
                        'placeholder' => 'Numéro du chant...'
                    )
                ))
            ->add('ref',
                TextareaType::class,
                array(
                    'label' => 'Référence.s',
                    'attr' => array(
                        'placeholder' => 'Cliquez pour choisir la/les référence.s',
                        'readonly' => true
                    ),
                ))
            ->add('title',
                TextType::class,
                array(
                    'label' => 'Titre du chant',
                    'attr' => array(
                        'placeholder' => 'Titre du chant...'
                    )
                ))
            ->add('lyrics',
                TextareaType::class,
                array(
                    'label' => 'Paroles du chant',
                    'attr' => array(
                        'placeholder' => 'Paroles du chant...',
                        'rows' => '15'
                    )
                ))
            ->add('musicalPart', MusicalPartType::class,
                array(
                    'label' => ' '
                ))
            ->add('enregistrer', SubmitType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Timothee\ModelBundle\Entity\Hymn'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'timothee_modelbundle_hymn';
    }


}

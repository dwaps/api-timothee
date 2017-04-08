<?php

namespace Timothee\ModelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

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
                        'placeholder' => 'Saisir la référence au bon format !'
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
                    'trim' => false,
                    'label' => 'Paroles du chant',
                    'attr' => array(
                        'placeholder' => 'Paroles du chant...',
                        'rows' => '15'
                    )
                ))
            ->add('musicalPart', MusicalPartType::class,
                array(
                    'required' => false,
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


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'intention' => 'task_form',
        ));
    }
}

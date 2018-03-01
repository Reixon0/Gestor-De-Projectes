<?php

namespace GestorProjectes\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use BackendBundle\Entity\Estat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SubtascaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nom')
                ->add('descripcio')
                ->add('participants')
                ->add('tempsMaxim')
                ->add('estat', EntityType::class, array(
                        'class' => 'GestorProjectesBackendBundle:Estat',
                        'choice_label' => 'nom',
                        'multiple' => FALSE,
                        'label_attr' => array('class' => 'labelT'),
                        'attr' => array('class' => 'form-control')
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestorProjectes\BackendBundle\Entity\Subtasca'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestorprojectes_backendbundle_subtasca';
    }


}

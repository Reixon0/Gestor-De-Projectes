<?php

namespace GestorProjectes\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use BackendBundle\Entity\Estat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TascaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('nom',TextType::class,array(
                     'attr' => array(
                         'class' => 'form-control'
                     ),
                ))
                ->add('descripcio',TextType::class,array( 
                     'attr' => array(
                         'class' => 'form-control'
                     ),
                ))
                ->add('estat', EntityType::class, array(
                      'class' => 'GestorProjectesBackendBundle:Estat',
                      'choice_label' => 'nom',
                      'multiple' => FALSE,                     
                      'attr' => array('class' => 'form-control ')
                    ))
                ->add('save',SubmitType::class,array(
                    'attr' => array(
                        'name' => 'Guardar',
                        'class' => 'col-md-1 pull-right'
                    )
                ));
//                ->add('descripcio')
//                ->add('tempsMaxim')
//                ->add('estat', EntityType::class, array(
//                      'class' => 'GestorProjectesBackendBundle:Estat',
//                      'choice_label' => 'nom',
//                      'multiple' => FALSE,
//                      'label_attr' => array('class' => 'labelT'),
//                      'attr' => array('class' => 'form-control')
        
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'GestorProjectes\BackendBundle\Entity\Tasca'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'gestorprojectes_backendbundle_tasca';
    }

}

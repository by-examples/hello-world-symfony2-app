<?php

namespace Gajdaw\BDDTutorial\GeographyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaveType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('length')
        ;
    }
    
        /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gajdaw\BDDTutorial\GeographyBundle\Entity\Cave',
                'attr' => array(
                    'class' => 'form-horizontal',
                    'role'  => 'form',
                ),
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gajdaw_bddtutorial_geographybundle_cave';
    }
}

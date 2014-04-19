<?php

namespace WebMeta\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', 'text')
             ->add('password', 'repeated', array(
                'first_name' => 'password',
                'second_name' => 'confirmation',
                'type' => 'password',    ))
            ->add('email', 'email')
            ->add('nom')
            ->add('prenom')
            ->add('date_naissance', 'birthday', array(
                'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour')))
            ->add('description', 'textarea', array('required' => false, 'label' => 'Qui suis-je ?'))    
            ->add('avatar', 'file', array('required' => false))
            ->add('valider', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebMeta\CommonBundle\Entity\Compte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webmeta_commonbundle_compte';
    }
}

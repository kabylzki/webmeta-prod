<?php

namespace WebMeta\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResultatType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idGagnant','choice', array('choices'   => array('m' => 'Masculin', 'f' => 'Féminin'),'required'  => false,))
            ->add('idPerdant', 'text')
            ->add('valider','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebMeta\CommonBundle\Entity\Resultat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webmeta_commonbundle_resultat';
    }
}

<?php

namespace WebMeta\CommonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // id_categorie = Liste des champs de la table catégorie nécessité d'utiliser un querybuilder
        $builder
            ->add('titre', 'text', array('label' => 'Titre de la page'))
            ->add('url_alias', 'text', array('label' => 'Url du lien'))
            ->add('nom_lien', 'text', array('label' => 'Nom du lien affiché'))    
            ->add('nom_categorie', 'entity', array(
            'class' => 'WebMetaCommonBundle:Categorie',
            'query_builder' => function($repository) { return $repository->createQueryBuilder('p')->orderBy('p.nom', 'ASC'); },
            'property' => 'nom',
            'label' => 'Catégorie'        
                    ))
            ->add('contenu', 'textarea', array('required' => false, 'label' => 'Contenu de la page'))
            ->add('valider', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebMeta\CommonBundle\Entity\Page'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webmeta_commonbundle_page';
    }
}

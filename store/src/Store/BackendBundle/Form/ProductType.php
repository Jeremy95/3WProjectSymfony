<?php


namespace Store\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * le suffixe type est obligatoire pour les classes des formulaires
 * Class ProductType
 * Formulaire de creation de produit
 * @package Store\BackEndBundle\Form
 */
class ProductType extends AbstractType {
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return "store_backend_product";
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Ajoute un champ dans mon formulaire
        // le nom de mes champs sont les attribut de mpon entite product
        // le 2eme arg de ma fonction add est le type de mon champ
        // 3eme arg option a mon champs
        $builder->add('title', null, array(
            'label' => "Titre de mon bijoux",
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Mettre un titre soigné',
                'pattern' => '[a-zA-Z0-9- ]{5,}'
            )
        ));
        $builder->add('ref', null, array(
            'label' => "Titre de mon bijoux",
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'AAAA-XX-B',
                'pattern' => '[A-Z][4]-[0-9][2]-[A-Z][1]'
            )
        ));
        $builder->add('category', null, array(
            'label' => "Catégories associés",
            'attr' => array(
                'class' => 'form-control'
            )
        ));
        $builder->add('cms', null, array(
            'label' => 'Page associé au produit',
            'attr' => array(
                'class' => 'form-control'
            )
        ));
        $builder->add('supplier', null, array(
            'label' => 'Fournisseurs associé au produit',
            'attr' => array(
                'class' => 'form-control'
            )
        ));
        $builder->add('tag', null, array(
            'label' => 'Tag associé au produit',
            'attr' => array(
                'class' => 'form-control'
            )
        ));
        $builder->add('summary', null, array(
            'label' => "Petit résumé",
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'petit résumé du bijoux'
            )
        ));
        $builder->add('description', null, array(
            'label' => "Titre de mon bijoux",
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Description longue du bijoux'
            )
        ));
        $builder->add('price', 'money', array(
            'label' => 'Prix HT en €',
            'attr' => array(
                'class' => 'form-control',
                'placeholder' => 'Prix en €'
            )
        ));
        $builder->add('taxe', 'choice', array(
            'choices' => array('5' => '5', '19.6' => '19.6', '20' => '20'),
            'required' => true,
            'preferred_choices' => array('20'),
            'label' => 'Taxe appliquées',
            'attr' => array(
                'class' => 'form-control'
            )
        ));
        $builder->add('quantity', null, array(
            'label' => 'Quantité du produit',
            'attr' => array(
                'class' => 'form-control',
                'pattern' => '[0-9][1,4]'
            )
        ));
        $builder->add('active', null, array(
            'label' => 'Produit activé dans la boutique'
        ));
        $builder->add('cover', null, array(
            'label' => 'Produit mis en couverture dans la boutique'
        ));
        $builder->add('Envoyer' , 'submit');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        // je lis le formulaire a l'entité product
        $resolver->setDefaults(array(
            'data_class' => 'Store\BackendBundle\Entity\Product'
        ));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        // je lis le formulaire a l'entité product
        $resolver->setDefaults(array(
            'data_class' => 'Store\BackendBundle\Entity\Product'
        ));
    }




} 
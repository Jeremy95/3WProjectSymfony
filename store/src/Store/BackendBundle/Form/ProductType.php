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
        $builder->add('category');
        $builder->add('cms');
        $builder->add('supplier');
        $builder->add('tag');
        $builder->add('summary');
        $builder->add('description');
        $builder->add('price');
        $builder->add('taxe');
        $builder->add('quantity');
        $builder->add('active');
        $builder->add('cover');
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
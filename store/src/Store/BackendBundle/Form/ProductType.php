<?php


namespace Store\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
        $builder->add('title');
        $builder->add('category');
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




} 
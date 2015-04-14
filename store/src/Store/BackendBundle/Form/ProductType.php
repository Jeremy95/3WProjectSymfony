<?php


namespace Store\BackEndBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
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
        // TODO: Implement getName() method.
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Ajoute un champ dans mon formulaire
        $builder->add('task');
    }




} 
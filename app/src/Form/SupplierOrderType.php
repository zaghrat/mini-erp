<?php

namespace App\Form;

use App\Entity\SupplierOrder;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupplierOrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('internalReference')
            ->add('externalReference')
            ->add('deliveryDate')
            ->add('supplier')
            ->add('company')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SupplierOrder::class,
        ]);
    }
}

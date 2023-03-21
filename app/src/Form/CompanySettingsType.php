<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanySettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'label' => 'Company\'s name',
                'attr' => ['disabled' => $options['disabled_fields']]
            ])
            ->add('currency', TextType::class, [
                'required' => true,
                'attr' => ['disabled' => $options['disabled_fields']]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
            'disabled_fields' => false,
        ]);

        $resolver->setAllowedTypes('disabled_fields', 'bool');
    }
}
